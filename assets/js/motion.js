/* Atelier Mira Lite – turn on the photo animations before the page paints, unless the visitor prefers reduced motion. */
if ( ! window.matchMedia || ! window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
	document.documentElement.classList.add( 'am-anim' );
}
