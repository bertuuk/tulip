<?php
/**
 * Title: Pricing, plan cards
 * Slug: tulip/pricing-plans
 * Categories: tulip, call-to-action, featured
 * Keywords: pricing, plans, prices, cards, recommended, features
 * Viewport Width: 1440
 * Description: Three plan cards based on the Tuk DS PlanCard: eyebrow, name, price, description, feature list with checks and a full-width button. The middle plan is marked as recommended.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Pricing, plan cards"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"40rem"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html_x( 'Pricing', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Choose the plan that fits.', 'pricing heading', 'tulip' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x( 'Change or cancel whenever you want.', 'pricing intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

<!-- wp:column {"className":"is-style-card tulip-plan"} -->
<div class="wp-block-column is-style-card tulip-plan">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Starter', 'plan eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Basic', 'plan name', 'tulip' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.375rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '0 €', 'plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'per month', 'plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'For trying it out or for a small project.', 'plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks","fontSize":"small"} -->
<ul class="wp-block-list is-style-checks has-small-font-size">
<!-- wp:list-item -->
<li><?php echo esc_html_x( 'One active project', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Up to three members', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Email support', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Start for free', 'plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'No card needed.', 'plan note under the button', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-card-recommended tulip-plan"} -->
<div class="wp-block-column is-style-card-recommended tulip-plan">
<!-- wp:paragraph {"className":"is-style-badge"} -->
<p class="is-style-badge"><?php echo esc_html_x( 'Recommended', 'plan badge', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Most chosen', 'plan eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Pro', 'plan name', 'tulip' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.375rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '29 €', 'plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'per month', 'plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'For teams that use it every week.', 'plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks","fontSize":"small"} -->
<ul class="wp-block-list is-style-checks has-small-font-size">
<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Unlimited projects', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Up to ten members', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Automatic scheduling', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Priority support', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Choose Pro', 'plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Cancel anytime.', 'plan note under the button', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-card tulip-plan"} -->
<div class="wp-block-column is-style-card tulip-plan">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Organisations', 'plan eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Business', 'plan name', 'tulip' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.375rem"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xx-large","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-xx-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( '79 €', 'plan price', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'per month', 'plan billing period', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_x( 'For several teams under one account.', 'plan description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checks","fontSize":"small"} -->
<ul class="wp-block-list is-style-checks has-small-font-size">
<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Everything in Pro', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Unlimited members', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html_x( 'Single sign-on', 'plan feature', 'tulip' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Talk to us', 'plan button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo esc_html_x( 'Annual billing available.', 'plan note under the button', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
