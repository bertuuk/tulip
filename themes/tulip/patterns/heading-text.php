<?php
/**
 * Title: Heading and text
 * Slug: tulip/heading-text
 * Categories: tulip, text
 * Keywords: intro, problem, about, statement, two columns
 * Viewport Width: 1440
 * Description: Eyebrow and large heading on the left, body text on the right, closing with a stronger sentence.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Heading and text"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'The problem', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Name the problem the way your customer would say it.', 'section heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Describe the situation in a few lines: what people do today, what it costs them in time or patience, and why it keeps happening.', 'section text', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'A second paragraph can add a detail or an example that makes it recognisable.', 'section text', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
<p class="has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Close with the one sentence you want them to remember.', 'section closing sentence', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
