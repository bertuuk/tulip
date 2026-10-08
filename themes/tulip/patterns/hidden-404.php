<?php
/**
 * Title: 404
 * Slug: tulip/hidden-404
 * Inserter: no
 *
 * @package Tulip
 */

?>
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html_x( 'Page not found', '404 page heading', 'tulip' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'The page you are looking for does not exist or has moved. Try a search.', '404 page message', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'tulip' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'tulip' ); ?>"} /-->
