<?php
/**
 * Title: Page header, minimal
 * Slug: tulip/page-header
 * Categories: tulip, banner
 * Keywords: page header, hero, title, breadcrumbs
 * Viewport Width: 1440
 * Description: Breadcrumbs, label, page title (H1) and one line of intro. Use with the "Page without title" template so the page has a single H1.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Page header"},"align":"full","className":"tulip-page-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tulip-page-header" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"45rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:breadcrumbs {"className":"tulip-breadcrumbs"} /-->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'About us', 'page header label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Made by people who had the problem first.', 'page header heading', 'tulip' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt","fontSize":"large"} -->
<p class="has-contrast-alt-color has-text-color has-large-font-size"><?php echo esc_html_x( 'One or two lines that say what this page is about.', 'page header intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
