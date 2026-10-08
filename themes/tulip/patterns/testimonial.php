<?php
/**
 * Title: Testimonial, large
 * Slug: tulip/testimonial
 * Categories: tulip, testimonials
 * Keywords: testimonial, quote, review, customer
 * Viewport Width: 1440
 * Description: A single large quote with the name, role and an optional photo of the person, on a dark background.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","className":"is-style-section-dark","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"65rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"className":"is-style-eyebrow"} -->
<h2 class="wp-block-heading is-style-eyebrow"><?php echo esc_html_x( 'Testimonial', 'section label', 'tulip' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:quote {"className":"is-style-statement"} -->
<blockquote class="wp-block-quote is-style-statement"><!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Quote from a real customer. One or two sentences, in their own words, about what changed for them.', 'testimonial quote', 'tulip' ); ?></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"className":"tulip-author tulip-author--lg","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group tulip-author tulip-author--lg"><!-- wp:image {"sizeSlug":"large","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-avatar.svg' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
<p style="font-weight:700"><?php echo esc_html_x( 'Name Surname', 'testimonial author name', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Role · Organisation', 'testimonial author role', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
