<?php
/**
 * Title: Logo strip
 * Slug: tulip/logos
 * Categories: tulip, featured, about
 * Keywords: logos, clients, partners, trust
 * Viewport Width: 1440
 * Description: A row of five or six client or partner logos with a small heading. Each logo needs alternative text.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Logo strip"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-eyebrow"} -->
<h2 class="wp-block-heading is-style-eyebrow"><?php echo esc_html_x( 'They already use it', 'logo strip heading', 'tulip' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Example logos. Replace them with real ones, with permission.', 'logo strip note', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"is-style-columns-divided tulip-logo-grid","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":6,"minimumColumnWidth":"8rem"}} -->
<div class="wp-block-group alignwide is-style-columns-divided tulip-logo-grid"><!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-1.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 1', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-2.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 2', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-3.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 3', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-4.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 4', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-5.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 5', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","className":"tulip-logo"} -->
<figure class="wp-block-image size-large tulip-logo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-logo-6.svg' ) ); ?>" alt="<?php echo esc_attr_x( 'Example logo 6', 'logo alternative text', 'tulip' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
