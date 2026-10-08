<?php
/**
 * Title: Closing call to action
 * Slug: tulip/cta-large
 * Categories: tulip, call-to-action
 * Keywords: cta, closing, signup, waitlist, contact
 * Viewport Width: 1440
 * Description: Very large heading with a short line and a button, on a dark background. Made to close a page.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Closing call to action"},"align":"full","className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"62%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:62%"><!-- wp:heading {"fontSize":"display"} -->
<h2 class="wp-block-heading has-display-font-size"><?php echo esc_html_x( 'Ready when you are.', 'closing heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:38%"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'One line on what happens after they click.', 'closing text', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Get started', 'closing button', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
