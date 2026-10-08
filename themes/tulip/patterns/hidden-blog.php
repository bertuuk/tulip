<?php
/**
 * Title: Blog index
 * Slug: tulip/hidden-blog
 * Inserter: no
 *
 * @package Tulip
 */

?>
<!-- wp:group {"tagName":"main","className":"tulip-main-listing","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group tulip-main-listing"><!-- wp:group {"align":"wide","className":"tulip-page-title","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"45rem","justifyContent":"left"}} -->
<div class="wp-block-group alignwide tulip-page-title"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Blog', 'blog page label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size"><?php echo esc_html_x( 'Notes for doing it better.', 'blog page heading', 'tulip' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'Short line describing what this blog is about.', 'blog page description', 'tulip' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"tulip-term-nav","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide tulip-term-nav"><!-- wp:paragraph {"className":"tulip-all-posts"} -->
<p class="tulip-all-posts"><a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/' ) ); ?>"><?php echo esc_html_x( 'All', 'blog category filter, all posts', 'tulip' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:categories {"className":"tulip-term-list"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"tulip-post-grid"} -->
<div class="wp-block-query alignwide tulip-post-grid"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"is-style-framed"} /-->

<!-- wp:group {"className":"tulip-post-meta","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group tulip-post-meta"><!-- wp:post-terms {"term":"category","className":"is-style-eyebrow"} /-->

<!-- wp:post-date {"format":"j M Y","className":"is-style-eyebrow"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"excerptLength":30,"className":"tulip-card-excerpt"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"42.5rem","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'No articles', 'blog empty state label', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Nothing published here yet.', 'blog empty state heading', 'tulip' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-alt"} -->
<p class="has-contrast-alt-color has-text-color"><?php echo esc_html_x( 'We are writing the first one. Meanwhile, search for another topic or see everything published.', 'blog empty state text', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search the blog', 'search form label', 'tulip' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the blog', 'search placeholder', 'tulip' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'tulip' ); ?>"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/' ) ); ?>"><?php echo esc_html_x( 'See all articles', 'blog empty state link', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
