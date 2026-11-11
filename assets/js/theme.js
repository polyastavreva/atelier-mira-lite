/* Atelier Mira – small front-end helpers. */
( function () {
	// Scrolling services band: copy the text once so the loop is seamless.
	document.querySelectorAll( '.am-band__track' ).forEach( function ( track ) {
		if ( track.dataset.ready ) return;
		Array.prototype.slice.call( track.children ).forEach( function ( el ) {
			var copy = el.cloneNode( true );
			copy.setAttribute( 'aria-hidden', 'true' );
			track.appendChild( copy );
		} );
		track.dataset.ready = '1';
	} );

	// Close the mobile menu after tapping a link to a section on the same page.
	document.addEventListener( 'click', function ( e ) {
		var link = e.target.closest && e.target.closest( '.wp-block-navigation__responsive-container.is-menu-open a[href*="#"]' );
		if ( ! link ) return;
		var close = document.querySelector( '.wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-close' );
		if ( close ) close.click();
	} );

	// Photos fade in as they scroll into view.
	var root = document.documentElement;
	if ( root.classList.contains( 'am-anim' ) ) {
		var photos = document.querySelectorAll( '.am-split .wp-block-image' );
		var show = function ( el ) { el.classList.add( 'is-in' ); };
		Array.prototype.forEach.call( photos, function ( el, i ) {
			el.classList.add( 'am-reveal' );
		} );
		if ( 'IntersectionObserver' in window ) {
			var io = new IntersectionObserver( function ( entries ) {
				entries.forEach( function ( e ) {
					if ( e.isIntersecting ) { show( e.target ); io.unobserve( e.target ); }
				} );
			}, { rootMargin: '0px 0px -10% 0px', threshold: 0.15 } );
			Array.prototype.forEach.call( photos, function ( el ) { io.observe( el ); } );
		} else {
			Array.prototype.forEach.call( photos, show );
		}
	}
} )();
