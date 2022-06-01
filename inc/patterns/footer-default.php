<?php
/**
 * Default footer
 */
return array(
	'title'      => __( 'Default footer', 'faithlakecity' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
	<!-- wp:group {"backgroundColor":"secondary","textColor":"foreground","layout":{"inherit":true}} -->
<div class="wp-block-group has-foreground-color has-secondary-background-color has-text-color has-background">
  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0","top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","textColor":"vivid-cyan-blue"}} -->
  <div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0">
    <!-- wp:columns -->
    <div class="wp-block-columns">
      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:site-logo {"width":278,"shouldSyncIcon":false} /-->
      </div>
      <!-- /wp:column -->

      <!-- wp:column -->
      <div class="wp-block-column">
        <!-- wp:html -->
        <div>
          <div>
            <p style="font-weight: 700; font-size: 1.6277em;">Faith Baptist Church &nbsp;~ &nbsp;Lake City, Florida</p>
            <p style="font-weight: 400; font-size: 1.3885em;">Visit us on Faith Road behind The Home Depot, Aldi\'s, and Ashley Furniture</p>
            <p style="font-weight: 400; font-size: 1.3885em;"><a href="https://www.facebook.com/FaithLakeCity" data-location="external" data-detail="https://www.facebook.com/FaithLakeCity/" data-category="link" target="_blank" class="cloverlinks" rel="noopener"><span data-socialicon="roundedfacebook"><span class="socialIconSymbol" aria-hidden="true"></span><span class="sr-only">roundedfacebook</span></span></a>  &nbsp;<span data-socialicon="roundedinstagram"><span class="socialIconSymbol" aria-hidden="true"></span><span class="sr-only">roundedinstagram</span></span>  &nbsp;<span data-socialicon="roundeditunes"><span class="socialIconSymbol" aria-hidden="true"></span><span class="sr-only">roundeditunes</span></span>  &nbsp;<a href="https://www.youtube.com/channel/UChYu0xZ0ZSQC2Y8CM4jv0ow/" data-location="external" data-detail="https://www.youtube.com/channel/UChYu0xZ0ZSQC2Y8CM4jv0ow/" data-category="link" target="_blank" class="cloverlinks" rel="noopener"><span data-socialicon="roundedyoutube"><span class="socialIconSymbol" aria-hidden="true"></span><span class="sr-only">roundedyoutube</span></span></a> </p>
          </div>
        </div>
        <!-- /wp:html -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
	',
);
