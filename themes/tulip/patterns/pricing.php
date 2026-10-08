<?php
/**
 * Title: Pricing
 * Slug: tulip/pricing
 * Categories: tulip, call-to-action, featured
 * Keywords: pricing, plans, prices, cards
 * Viewport Width: 1440
 * Description: Heading with a short note, then three plan cards; the last one is highlighted in dark.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Pricing"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Pricing', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Pay only if it works for you.', 'pricing heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'One line that removes the main doubt about price.', 'pricing intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)">

<!-- wp:column {"className":"is-style-card"} -->
<div class="wp-block-column is-style-card"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Free', 'pricing plan name', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'To try it out or for small projects.', 'pricing plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '0 €', 'pricing plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'forever', 'pricing plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"fontSize":"small"} -->
<ul class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'One active project', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Basic features', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Email support', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Start for free', 'pricing plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-card"} -->
<div class="wp-block-column is-style-card"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Standard', 'pricing plan name', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'For regular use.', 'pricing plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '29 €', 'pricing plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'per month', 'pricing plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"fontSize":"small"} -->
<ul class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Everything in Free', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Unlimited projects', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Automatic scheduling', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Choose Standard', 'pricing plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-card-dark"} -->
<div class="wp-block-column is-style-card-dark"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Premium', 'pricing plan name', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'For teams who use it every week.', 'pricing plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '79 €', 'pricing plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'per month', 'pricing plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"fontSize":"small"} -->
<ul class="wp-block-list has-small-font-size"><!-- wp:list-item -->
<li><?php echo esc_html_x( 'Everything in Standard', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Up to five members', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Priority support', 'pricing plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Choose Premium', 'pricing plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
