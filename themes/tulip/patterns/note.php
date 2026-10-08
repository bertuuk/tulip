<?php
/**
 * Title: Note box
 * Slug: tulip/note
 * Categories: tulip, text
 * Keywords: note, aside, tip, callout
 * Viewport Width: 1440
 * Description: A boxed aside for articles: a label and a short text. Add a Code block inside if needed.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Note"},"className":"is-style-card tulip-note","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-card tulip-note"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary"} -->
<p class="is-style-eyebrow has-primary-color has-text-color"><?php echo esc_html_x( 'Note', 'note label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'A short aside the reader should not miss: a tip, a warning or a calculation.', 'note text', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
