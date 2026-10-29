<?php
/**
 * Title: Header
 * Slug: atelier-mira-lite/header
 * Categories: atelier-mira-lite
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"am-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull am-header"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"30px","padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:20px;padding-bottom:20px"><!-- wp:site-title {"level":0} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"28px"}}} -->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Services', 'atelier-mira-lite' ); ?>","url":"<?php echo esc_url( home_url( '/#menu' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- wp:navigation-link {"label":"<?php echo esc_attr__( 'Visit', 'atelier-mira-lite' ); ?>","url":"<?php echo esc_url( home_url( '/#visit' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/#visit' ) ); ?>"><?php esc_html_e( 'Book now', 'atelier-mira-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
