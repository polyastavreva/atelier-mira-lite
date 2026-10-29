<?php
/**
 * Title: Hero with photo collage
 * Slug: atelier-mira-lite/hero
 * Categories: atelier-mira-lite
 * Keywords: hero, header, intro, salon
 * Description: Big serif headline, intro text, two buttons, three numbers and a three-photo collage.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"am-section am-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull am-section am-hero"><!-- wp:group {"align":"wide","className":"am-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide am-hero__grid"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'Hair studio since 2014', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( __( 'Hair that feels like <em>you</em>, only better.', 'atelier-mira-lite' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"am-hero__lead"} -->
<p class="am-hero__lead"><?php esc_html_e( 'Precision cuts, natural colour and bridal styling in a calm, light-filled studio. Every appointment starts with a proper consultation.', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#visit"><?php esc_html_e( 'Book an appointment', 'atelier-mira-lite' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#menu"><?php esc_html_e( 'See prices', 'atelier-mira-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"am-stats","layout":{"type":"default"}} -->
<div class="wp-block-group am-stats"><!-- wp:group {"className":"am-stat","layout":{"type":"default"}} -->
<div class="wp-block-group am-stat"><!-- wp:paragraph {"className":"am-stat__value"} -->
<p class="am-stat__value">4.9</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"am-stat__label"} -->
<p class="am-stat__label"><?php esc_html_e( 'Google rating', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"am-stat","layout":{"type":"default"}} -->
<div class="wp-block-group am-stat"><!-- wp:paragraph {"className":"am-stat__value"} -->
<p class="am-stat__value"><?php esc_html_e( '12k+', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"am-stat__label"} -->
<p class="am-stat__label"><?php esc_html_e( 'happy clients', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"am-stat","layout":{"type":"default"}} -->
<div class="wp-block-group am-stat"><!-- wp:paragraph {"className":"am-stat__value"} -->
<p class="am-stat__value">100%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"am-stat__label"} -->
<p class="am-stat__label"><?php esc_html_e( 'vegan colour', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"am-collage","layout":{"type":"default"}} -->
<div class="wp-block-group am-collage"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-1.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Stylist creating an updo for a seated client', 'atelier-mira-lite' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-2.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Stylist blow-drying a client&#x27;s hair with a round brush', 'atelier-mira-lite' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-3.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Client having her hair washed', 'atelier-mira-lite' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
