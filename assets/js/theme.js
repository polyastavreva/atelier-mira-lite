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
		var photos = document.querySelectorAll( '.am-split .wp-block-image, .am-gallery .wp-block-image' );
		var show = function ( el ) { el.classList.add( 'is-in' ); };
		Array.prototype.forEach.call( photos, function ( el, i ) {
			el.classList.add( 'am-reveal' );
			if ( el.parentElement && el.parentElement.classList.contains( 'am-gallery' ) ) {
				el.style.transitionDelay = ( Array.prototype.indexOf.call( el.parentElement.children, el ) * 0.12 ) + 's';
			}
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

	// Appointment form. Set data-endpoint on the form to your Formspree, Basin or
	// Web3Forms URL (Site Editor → front page → the form's Custom HTML block).
	// While it is empty the form runs in demo mode: it shows the thank-you text and sends nothing.
	document.querySelectorAll( 'form.am-form' ).forEach( function ( form ) {
		form.addEventListener( 'submit', function ( e ) {
			e.preventDefault();
			var button = form.querySelector( 'button[type=submit]' );
			var endpoint = form.getAttribute( 'data-endpoint' ) || '';
			button.disabled = true;
			var done = function () {
				button.textContent = form.getAttribute( 'data-success' ) || 'Thank you!';
				form.reset();
			};
			if ( ! endpoint ) {
				done();
				return;
			}
			fetch( endpoint, { method: 'POST', body: new FormData( form ), headers: { Accept: 'application/json' } } )
				.then( function ( r ) {
					if ( ! r.ok ) throw new Error( 'Request failed' );
					done();
				} )
				.catch( function () {
					button.textContent = form.getAttribute( 'data-error' ) || 'Could not send. Please call us.';
					button.disabled = false;
				} );
		} );
	} );
} )();
