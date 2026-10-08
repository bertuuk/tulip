<?php
/**
 * Title: Plan comparison table
 * Slug: tulip/plan-comparison
 * Categories: tulip, call-to-action, featured
 * Keywords: pricing, plans, comparison, table
 * Viewport Width: 1440
 * Description: A table with one column per plan and one row per feature. On mobile the plans scroll sideways and the feature names stay fixed.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Plan comparison"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Plans', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Compare the plans.', 'section heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'The first one is free. You only pay when it grows.', 'section intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:table {"className":"is-style-comparison"} -->
<figure class="wp-block-table is-style-comparison"><table class="has-fixed-layout"><thead><tr><td></td><th scope="col"><?php echo esc_html_x( 'Free', 'plan name', 'tulip' ); ?></th><th scope="col"><?php echo esc_html_x( 'Standard', 'plan name', 'tulip' ); ?></th><th scope="col"><?php echo esc_html_x( 'Premium', 'plan name', 'tulip' ); ?></th></tr></thead><tbody><tr><th scope="row"><?php echo esc_html_x( 'Active projects', 'comparison table feature', 'tulip' ); ?></th><td><?php echo esc_html_x( '1', 'comparison table cell', 'tulip' ); ?></td><td><?php echo esc_html_x( '3', 'comparison table cell', 'tulip' ); ?></td><td><?php echo esc_html_x( 'Unlimited', 'comparison table cell', 'tulip' ); ?></td></tr><tr><th scope="row"><?php echo esc_html_x( 'Members', 'comparison table feature', 'tulip' ); ?></th><td><?php echo esc_html_x( '1', 'comparison table cell', 'tulip' ); ?></td><td><?php echo esc_html_x( '3', 'comparison table cell', 'tulip' ); ?></td><td><?php echo esc_html_x( 'Up to 10', 'comparison table cell', 'tulip' ); ?></td></tr><tr><th scope="row"><?php echo esc_html_x( 'Automatic scheduling', 'comparison table feature', 'tulip' ); ?></th><td>—</td><td>✓</td><td>✓</td></tr><tr><th scope="row"><?php echo esc_html_x( 'Public page with QR', 'comparison table feature', 'tulip' ); ?></th><td>✓</td><td>✓</td><td>✓</td></tr><tr><th scope="row"><?php echo esc_html_x( 'Directory', 'comparison table feature', 'tulip' ); ?></th><td>—</td><td><?php echo esc_html_x( 'Per project', 'comparison table cell', 'tulip' ); ?></td><td><?php echo esc_html_x( 'Whole organisation', 'comparison table cell', 'tulip' ); ?></td></tr><tr><th scope="row"><?php echo esc_html_x( 'Archived projects', 'comparison table feature', 'tulip' ); ?></th><td>—</td><td>—</td><td>✓</td></tr></tbody></table><figcaption class="wp-element-caption"><?php echo esc_html_x( '✓ included · — not included', 'comparison table caption', 'tulip' ); ?></figcaption></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
