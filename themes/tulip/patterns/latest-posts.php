<?php
/**
 * Title: Latest posts
 * Slug: tulip/latest-posts
 * Categories: tulip, posts, featured
 * Keywords: blog, posts, news, articles
 * Viewport Width: 1440
 * Description: Heading with a link to the blog and the three latest posts as cards: image, date, title and a read more link.
 *
 * @package Tulip
 */

?>
<!-- wp:group {"metadata":{"name":"Latest posts"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:70%"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html_x( 'Blog', 'section eyebrow', 'tulip' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html_x( 'Notes for doing it better.', 'section heading', 'tulip' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text"} -->
<div class="wp-block-button is-style-text"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/' ) ); ?>"><?php echo esc_html_x( 'See all articles', 'latest posts see all link', 'tulip' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<!-- wp:post-featured-image {"aspectRatio":"3/2","className":"is-style-framed"} /-->

<!-- wp:post-date {"format":"j M Y","className":"is-style-eyebrow"} /-->

<!-- wp:post-title {"level":3,"fontSize":"x-large"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr_x( 'Read more', 'latest posts link', 'tulip' ); ?>"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'Nothing has been published here yet.', 'message shown when a query has no results', 'tulip' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
