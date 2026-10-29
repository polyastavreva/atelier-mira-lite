<?php
/**
 * Title: Studio intro with photo
 * Slug: atelier-mira-lite/intro
 * Categories: atelier-mira-lite
 * Keywords: about, intro, studio, story
 * Description: Photo on the left, a short story about the studio and a signature on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"am-section am-intro","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull am-section am-intro"><!-- wp:group {"align":"wide","className":"am-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide am-split"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/studio.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Salon interior with round mirrors and black chairs', 'atelier-mira-lite' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'The studio', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Slow beauty, in the middle of town', 'atelier-mira-lite' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We book fewer clients per day than most salons, so nobody rushes your consultation. We use vegan, ammonia-free colour and we\'ll always tell you honestly what your hair can and can\'t do.', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Coffee is on us. Wi-Fi password is on the mirror.', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"am-signature"} -->
<p class="am-signature"><?php esc_html_e( '— Mira Keller, founder', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
