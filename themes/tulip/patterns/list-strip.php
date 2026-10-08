<?php
/**
 * Title: Highlight strip
 * Slug: tulip/list-strip
 * Categories: tulip, text
 * Keywords: strip, band, list, features, tags
 * Viewport Width: 1440
 * Description: Narrow full-width band in the accent colour with a label and a horizontal list.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Highlight strip"},"align":"full","className":"is-style-section-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-accent" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Includes', 'highlight strip label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-inline","style":{"typography":{"fontWeight":"600"}}} -->
<ul style="font-weight:600" class="wp-block-list is-style-inline"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'First feature', 'highlight strip item', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Second feature', 'highlight strip item', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Third feature', 'highlight strip item', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Fourth feature', 'highlight strip item', 'tulip' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
