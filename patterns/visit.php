<?php
/**
 * Title: Opening hours and booking
 * Slug: atelier-mira-lite/visit
 * Categories: atelier-mira-lite
 * Keywords: contact, booking, hours, appointment, address
 * Description: Address, opening hours and a booking button.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","className":"am-section am-visit-sec","layout":{"type":"constrained"}} -->
<div id="visit" class="wp-block-group alignfull am-section am-visit-sec"><!-- wp:group {"align":"wide","className":"am-visit","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide am-visit"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php esc_html_e( 'Visit us', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( '18 Orchard Lane', 'atelier-mira-lite' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"am-muted"} -->
<p class="am-muted"><?php esc_html_e( 'Two minutes from the market square. Free parking behind the building.', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"am-hours"} -->
<figure class="wp-block-table am-hours"><table class="has-fixed-layout"><tbody><tr><td><?php esc_html_e( 'Monday', 'atelier-mira-lite' ); ?></td><td><?php esc_html_e( 'closed', 'atelier-mira-lite' ); ?></td></tr><tr><td><?php esc_html_e( 'Tue, Wed, Fri', 'atelier-mira-lite' ); ?></td><td>9:00 – 19:00</td></tr><tr><td><?php esc_html_e( 'Thursday', 'atelier-mira-lite' ); ?></td><td>9:00 – 21:00</td></tr><tr><td><?php esc_html_e( 'Saturday', 'atelier-mira-lite' ); ?></td><td>8:30 – 16:00</td></tr><tr><td><?php esc_html_e( 'Sunday', 'atelier-mira-lite' ); ?></td><td><?php esc_html_e( 'closed', 'atelier-mira-lite' ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '000 000 0000 · hello@example.com', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"am-book","backgroundColor":"rose","layout":{"type":"default"}} -->
<div class="wp-block-group am-book has-rose-background-color has-background"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Book your visit', 'atelier-mira-lite' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Choose a service and a time that suits you. Most appointments can be booked online in under a minute.', 'atelier-mira-lite' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#visit"><?php esc_html_e( 'Book online', 'atelier-mira-lite' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
