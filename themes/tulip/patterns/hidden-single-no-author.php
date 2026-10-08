<?php
/**
 * Title: Single post without author
 * Slug: tulip/hidden-single-no-author
 * Inserter: no
 *
 * @package Tulip
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"align":"wide","className":"tulip-page-title","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide tulip-page-title"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:breadcrumbs {"className":"tulip-breadcrumbs"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"42.5rem"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"tulip-post-meta","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tulip-post-meta"><!-- wp:post-terms {"term":"category","className":"is-style-eyebrow","textColor":"primary"} /-->

<!-- wp:post-date {"className":"is-style-eyebrow"} /-->

<!-- wp:post-time-to-read {"className":"is-style-eyebrow"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"fontSize":"xxx-large"} /-->

<!-- wp:post-excerpt {"className":"tulip-standfirst","fontSize":"x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"aspectRatio":"21/9","align":"wide","className":"is-style-framed"} /-->

<!-- wp:post-content {"align":"full","className":"tulip-article","layout":{"type":"constrained","contentSize":"42.5rem","wideSize":"60rem"}} /-->

<!-- wp:group {"className":"is-style-ruled tulip-post-footer","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"42.5rem"}} -->
<div class="wp-block-group is-style-ruled tulip-post-footer"><!-- wp:group {"className":"tulip-post-tags","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group tulip-post-tags"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Tags', 'post tags label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","separator":" "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Keep reading"},"align":"full","className":"is-style-section-alt","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-alt" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:70%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Blog', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Keep reading.', 'related posts heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:buttons {"className":"tulip-header-link","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons tulip-header-link"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/' ) ); ?>"><?php echo esc_html_x( 'See all articles', 'latest posts see all link', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":23,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","className":"tulip-related"} -->
<div class="wp-block-query alignwide tulip-related"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"is-style-framed"} /-->

<!-- wp:group {"className":"tulip-post-meta","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tulip-post-meta"><!-- wp:post-terms {"term":"category","className":"is-style-eyebrow"} /-->

<!-- wp:post-date {"format":"j M Y","className":"is-style-eyebrow"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr_x( 'Read more', 'latest posts link', 'tulip' ); ?>"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
