<?php
/**
 * Plugin Name:       Tulip Blocks
 * Description:       Blocks for the Tulip theme: interactive sections that core blocks and patterns can't do. They use Tulip's colour roles and section styles.
 * Version:           0.1.0
 * Requires at least: 6.6
 * Requires PHP:      7.4
 * Author:            Berta Nicolau
 * Author URI:        https://bertanicolau.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tulip-blocks
 *
 * @package TulipBlocks
 */

defined( 'ABSPATH' ) || exit;

define( 'TULIP_BLOCKS_VERSION', '0.1.0' );
define( 'TULIP_BLOCKS_DIR', __DIR__ );

/**
 * Registers every block compiled into build/ (one folder per block, each with
 * its block.json). Adding a block means adding a folder in src/; nothing to
 * change here.
 */
function tulip_blocks_register() {
	foreach ( glob( TULIP_BLOCKS_DIR . '/build/*/block.json' ) ?: array() as $metadata ) {
		register_block_type( dirname( $metadata ) );
	}
}
add_action( 'init', 'tulip_blocks_register' );
