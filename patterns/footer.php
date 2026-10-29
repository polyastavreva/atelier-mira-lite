<?php
/**
 * Title: Footer
 * Slug: atelier-mira-lite/footer
 * Categories: atelier-mira-lite
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"am-footer","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull am-footer"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"20px"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Instagram', 'atelier-mira-lite' ); ?>","url":"https://instagram.com/","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Imprint', 'atelier-mira-lite' ); ?>","url":"<?php echo esc_url( home_url( '/imprint/' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Atelier Mira Lite theme by Pavlina Stavreva', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
