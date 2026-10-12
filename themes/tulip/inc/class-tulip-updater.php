<?php
/**
 * Updates from GitHub Releases.
 *
 * Tulip is not on WordPress.org yet. The `Update URI` header in style.css
 * tells WordPress not to look for it there (another theme called "tulip"
 * could exist), and this class answers WordPress's own update check with
 * the latest GitHub Release instead. It uses the core mechanism
 * (`update_themes_{hostname}`, WordPress 6.1+), so updates show up in
 * Dashboard → Updates and work with automatic updates.
 *
 * The Release must have a `tulip.zip` asset whose root folder is `tulip/`
 * (the release workflow in the repo builds it).
 *
 * This file is left out of the WordPress.org build: themes in the directory
 * must not ship their own updater.
 *
 * @package Tulip
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Tulip_GitHub_Updater' ) ) :

	/**
	 * Answers WordPress's theme update check with the latest GitHub Release.
	 */
	class Tulip_GitHub_Updater {

		/**
		 * Theme folder name (stylesheet).
		 *
		 * @var string
		 */
		private $slug;

		/**
		 * GitHub repository, "owner/name".
		 *
		 * @var string
		 */
		private $repo;

		/**
		 * Transient that caches the GitHub answer.
		 *
		 * @var string
		 */
		private $cache_key;

		/**
		 * Set up the filter.
		 *
		 * @param string $slug Theme folder name.
		 * @param string $repo GitHub repository, "owner/name".
		 */
		public function __construct( $slug, $repo ) {
			$this->slug      = $slug;
			$this->repo      = $repo;
			$this->cache_key = 'tulip_github_release_' . md5( $repo );

			add_filter( 'update_themes_github.com', array( $this, 'check' ), 10, 3 );
			add_filter( 'auto_update_theme', array( $this, 'hold_major' ), 20, 2 );
		}

		/**
		 * Automatic updates only within the same major version.
		 *
		 * 1.1.0 → 1.2.0 installs on its own; 1.x → 2.0.0 is offered in
		 * Dashboard → Updates but waits for someone to click. A major version
		 * is where breaking changes go, so a person should be there.
		 *
		 * @param bool|null $update Whether to auto-update.
		 * @param object    $item   Update offer (theme, new_version...).
		 * @return bool|null
		 */
		public function hold_major( $update, $item ) {
			if ( ! is_object( $item ) || ! isset( $item->theme, $item->new_version ) || $item->theme !== $this->slug ) {
				return $update;
			}
			$installed = wp_get_theme( $this->slug )->get( 'Version' );
			if ( (int) $installed !== (int) $item->new_version ) {
				return false;
			}
			return $update;
		}

		/**
		 * Tell WordPress which version is available and where to get it.
		 *
		 * WordPress compares the version itself: it shows an update only when
		 * this one is newer. Returning data even when up to date lets the
		 * "Enable auto-updates" link appear.
		 *
		 * @param array|false $update     Update data from earlier filters.
		 * @param array       $theme_data Theme headers.
		 * @param string      $stylesheet Theme folder name.
		 * @return array|false
		 */
		public function check( $update, $theme_data, $stylesheet ) {
			if ( $stylesheet !== $this->slug || ! empty( $update ) ) {
				return $update;
			}

			$release = $this->latest_release();
			if ( ! $release ) {
				return $update;
			}

			return array(
				'theme'   => $this->slug,
				'version' => $release['version'],
				'url'     => $release['url'],
				'package' => $release['package'],
			);
		}

		/**
		 * Latest release: version, page URL and zip URL. Cached; on any
		 * problem returns false, so WordPress simply shows no update.
		 *
		 * @return array|false
		 */
		private function latest_release() {
			$force = is_admin()
				&& isset( $_GET['force-check'] ) // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- read-only, same as core.
				&& current_user_can( 'update_themes' );

			$cached = get_site_transient( $this->cache_key );
			if ( ! $force && false !== $cached ) {
				return is_array( $cached ) ? $cached : false;
			}

			$response = wp_remote_get(
				'https://api.github.com/repos/' . $this->repo . '/releases/latest',
				array(
					'timeout' => 10,
					'headers' => array(
						'Accept'     => 'application/vnd.github+json',
						'User-Agent' => 'WordPress/' . get_bloginfo( 'version' ) . '; ' . home_url( '/' ),
					),
				)
			);

			$release = $this->parse( $response );

			// 12 hours when it worked, 1 hour after an error. 'none' marks an error.
			set_site_transient( $this->cache_key, $release ? $release : 'none', $release ? 12 * HOUR_IN_SECONDS : HOUR_IN_SECONDS );

			return $release;
		}

		/**
		 * Read the GitHub API answer.
		 *
		 * @param array|WP_Error $response HTTP response.
		 * @return array|false
		 */
		private function parse( $response ) {
			if ( is_wp_error( $response ) || 200 !== (int) wp_remote_retrieve_response_code( $response ) ) {
				return false;
			}

			$body = json_decode( wp_remote_retrieve_body( $response ), true );
			if ( ! is_array( $body ) || ! empty( $body['draft'] ) || ! empty( $body['prerelease'] ) || empty( $body['tag_name'] ) ) {
				return false;
			}

			$version = ltrim( (string) $body['tag_name'], 'vV' );
			if ( ! preg_match( '/^\d+\.\d+\.\d+$/', $version ) ) {
				return false;
			}

			$package = '';
			if ( ! empty( $body['assets'] ) && is_array( $body['assets'] ) ) {
				foreach ( $body['assets'] as $asset ) {
					if ( isset( $asset['name'], $asset['browser_download_url'] ) && $this->slug . '.zip' === $asset['name'] ) {
						$package = $asset['browser_download_url'];
						break;
					}
				}
			}
			if ( '' === $package ) {
				return false;
			}

			return array(
				'version' => $version,
				'url'     => isset( $body['html_url'] ) ? esc_url_raw( $body['html_url'] ) : 'https://github.com/' . $this->repo . '/releases',
				'package' => esc_url_raw( $package ),
			);
		}
	}

endif;
