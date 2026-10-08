<?php
/**
 * Title: Announcement bar
 * Slug: tulip/announcement
 * Categories: tulip, banner, call-to-action
 * Keywords: announcement, notice, banner, news
 * Viewport Width: 1440
 * Description: A thin strip with one short sentence and a link. Place it at the very top of a page or in the header.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Announcement bar"},"align":"full","className":"is-style-section-accent","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-accent" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'News', 'announcement label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Registrations open on 15 November.', 'announcement text', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
<p style="font-weight:600"><a href="#"><?php echo esc_html_x( 'Join the waitlist →', 'announcement link', 'tulip' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
