<?php
/**
 * Pattern content: closing call to action with email form. Registered in inc/plugin-integrations.php.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Closing call to action with email form"},"align":"full","className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:heading {"fontSize":"display"} -->
<h2 class="wp-block-heading has-display-font-size"><?php echo esc_html_x( 'Ready when you are.', 'closing heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Leave your email and we will let you know when we open.', 'closing text above the email form', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<?php echo tulip_getresponse_form_markup( 'tulip-cta-form' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- block markup built and escaped in tulip_getresponse_form_markup(). ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
