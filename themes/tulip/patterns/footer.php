<?php
/**
 * Title: Footer
 * Slug: tulip/footer
 * Categories: tulip, footer
 * Block Types: core/template-part/footer
 * Description: Dark footer with the site name and tagline, three link columns and a bottom line.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","className":"is-style-section-dark","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-dark" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":32} /-->

<!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:site-tagline {"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Product', 'footer column label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php echo esc_attr_x( 'Product', 'footer navigation label', 'tulip' ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'About', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'How it works', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Pricing', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Questions', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Contact', 'footer column label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php echo esc_attr_x( 'Contact', 'footer navigation label', 'tulip' ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Email', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Instagram', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'LinkedIn', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Legal', 'footer column label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"<?php echo esc_attr_x( 'Legal', 'footer navigation label', 'tulip' ); ?>","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Legal notice', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Privacy', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr_x( 'Cookies', 'footer link', 'tulip' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"var:preset|color|primary-strong","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--primary-strong);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo esc_html_x( '© Your company', 'footer copyright line', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php
	/* translators: %s: WordPress link. */
	printf( esc_html__( 'Built with %s', 'tulip' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'tulip' ) ) . '">WordPress</a>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
