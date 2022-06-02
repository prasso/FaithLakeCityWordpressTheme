<?php
/**
 * Two images with text block pattern
 */
return array(
	'title'      => __( 'Two columns text on left image on right', 'faithlakecity' ),
	'categories' => array( 'featured', 'columns', 'gallery' ),
	'content'    => '
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

	<!-- wp:column {"style":{"backgroundColor":"background"} -->
	<div class="wp-block-column has-background-color">
	
	<!-- wp:group  -->
	<div class="wp-block-group fb-spacer90">
	
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"vivid-cyan-blue","className":"has-medium-font-size"} -->
	<h2 class="fb-header3 has-medium-font-size has-vivid-cyan-blue-color has-text-color" id="screening">FAITH BAPTIST CHURCH</h2>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"has-x-large-font-size"} -->
	<h2 class="fb-header3 has-x-large-font-size" id="screening">CONNECT</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>We are not alone in this world! &nbsp;God designed us to be in relationship with Himself and other people as we walk the path of life. &nbsp;</p>
	<!-- /wp:paragraph -->
	
	</div>
	<!-- /wp:group -->

	</div>
	<!-- /wp:column -->
	
	<!-- wp:column {"align":"wide"} } -->
	<div class="wp-block-column">
	<!-- wp:cover {"url":"https://faithlakecity.prasso.io/wp-content/uploads/site-images/78b2ad9d-c7a1-4e10-a18e-4c5e0c17fd9d.jpg","id":142,"dimRatio":50,"isDark":false} -->
	<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-142" alt="" src="https://faithlakecity.prasso.io/wp-content/uploads/site-images/78b2ad9d-c7a1-4e10-a18e-4c5e0c17fd9d.jpg" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">0</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->',
);
