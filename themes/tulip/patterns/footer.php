<?php
/**
 * Title: Footer
 * Slug: tulip/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Site footer with the site title and a credit line.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"base-alt","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php
	/* translators: %s: WordPress link. */
	printf( esc_html__( 'Built with %s', 'tulip' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'tulip' ) ) . '">WordPress</a>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
