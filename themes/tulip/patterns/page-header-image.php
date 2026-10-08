<?php
/**
 * Title: Page header with image
 * Slug: tulip/page-header-image
 * Categories: tulip, banner
 * Keywords: page header, hero, title, breadcrumbs
 * Viewport Width: 1440
 * Description: Breadcrumbs, label, page title (H1) and intro next to an image. Use with the "Page without title" template so the page has a single H1.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Page header with image"},"align":"full","className":"tulip-page-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tulip-page-header" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:breadcrumbs {"className":"tulip-breadcrumbs"} /-->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'About us', 'page header label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Made by people who had the problem first.', 'page header heading', 'tulip' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt","fontSize":"large"} -->
<p class="has-contrast-alt-color has-text-color has-large-font-size"><?php echo esc_html_x( 'One or two lines that say what this page is about.', 'page header intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"is-style-framed"} -->
<figure class="wp-block-image size-large is-style-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-landscape.svg' ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
