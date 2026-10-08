<?php
/**
 * Title: Page header, legal
 * Slug: tulip/page-header-legal
 * Categories: tulip, banner
 * Keywords: page header, hero, title, breadcrumbs
 * Viewport Width: 1440
 * Description: Compact header for legal and text pages: breadcrumbs, title (H1) and last updated date. Use with the "Page without title" template so the page has a single H1.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Page header legal"},"align":"full","className":"tulip-page-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tulip-page-header" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"45rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:breadcrumbs {"className":"tulip-breadcrumbs"} /-->

<!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Privacy policy', 'legal page heading', 'tulip' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Last updated: 8 October 2026', 'legal page last updated', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
