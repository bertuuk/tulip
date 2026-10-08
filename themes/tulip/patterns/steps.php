<?php
/**
 * Title: How it works, three steps
 * Slug: tulip/steps
 * Categories: tulip, featured, about
 * Keywords: steps, how it works, process
 * Viewport Width: 1440
 * Description: Three numbered steps in a row, each with a title, a short text and an optional image. Stacks on mobile.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"How it works"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'How it works', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Three steps.', 'section heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:40%"><!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'Pretty much how you do it today, minus (a lot of) the work.', 'section intro', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"is-style-ruled-strong","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-ruled-strong"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary"} -->
<p class="is-style-eyebrow has-primary-color has-text-color"><?php echo esc_html_x( 'Step 01', 'step number', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Add your data', 'step title', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'Import a file or add it by hand. Duplicates are flagged.', 'step description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","className":"is-style-framed"} -->
<figure class="wp-block-image size-large is-style-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-landscape.svg' ) ); ?>" alt="" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-ruled-strong","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-ruled-strong"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary"} -->
<p class="is-style-eyebrow has-primary-color has-text-color"><?php echo esc_html_x( 'Step 02', 'step number', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Choose how it works', 'step title', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'Set the format and the options. The tool does the rest.', 'step description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","className":"is-style-framed"} -->
<figure class="wp-block-image size-large is-style-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-landscape.svg' ) ); ?>" alt="" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-ruled-strong","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-ruled-strong"><!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"primary"} -->
<p class="is-style-eyebrow has-primary-color has-text-color"><?php echo esc_html_x( 'Step 03', 'step number', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Share the link', 'step title', 'tulip' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'Send the link or print the QR. Everyone sees what concerns them.', 'step description', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"aspectRatio":"16/10","scale":"cover","sizeSlug":"large","className":"is-style-framed"} -->
<figure class="wp-block-image size-large is-style-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-landscape.svg' ) ); ?>" alt="" style="aspect-ratio:16/10;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'Try it for free', 'steps primary button', 'tulip' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html_x( 'See pricing', 'steps secondary link', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
