<?php
/**
 * Title: Faculty Page
 * Slug: ssc2025/faculty-page
 * Categories: ssc2025/page-layouts
 */
?>

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
 <main class="wp-block-group">
<!-- wp:group {"layout":{"type":"constrained"}} -->

<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","height":"200px","linkTarget":"_blank","className":"border-radius: 6px;"} /-->

<!-- wp:post-title /-->

<!-- wp:post-excerpt {"moreText":"Read More"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No results match your search.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- /wp:group -->
 </main>
<!-- /wp:group -->