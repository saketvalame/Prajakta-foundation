/**
 * Prajkta Foundation — front-end behaviour.
 * Navigation, sliders, tabs, filters, and the preview-only forms.
 */
( function () {
	'use strict';

	const $ = ( sel, root = document ) => root.querySelector( sel );
	const $$ = ( sel, root = document ) => Array.from( root.querySelectorAll( sel ) );
	const reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	/* Mobile navigation ------------------------------------------------- */
	const toggle = $( '.nav-toggle' );
	if ( toggle ) {
		toggle.addEventListener( 'click', () => {
			const open = document.body.classList.toggle( 'nav-open' );
			toggle.setAttribute( 'aria-expanded', String( open ) );
		} );
		document.addEventListener( 'keydown', ( e ) => {
			if ( e.key === 'Escape' && document.body.classList.contains( 'nav-open' ) ) {
				document.body.classList.remove( 'nav-open' );
				toggle.setAttribute( 'aria-expanded', 'false' );
				toggle.focus();
			}
		} );
	}

	$$( '.site-nav .menu-item-has-children' ).forEach( ( item, i ) => {
		const sub = $( '.sub-menu', item );
		const link = $( 'a', item );
		if ( ! sub || ! link ) {
			return;
		}
		sub.id = sub.id || 'pf-submenu-' + i;
		const btn = document.createElement( 'button' );
		btn.type = 'button';
		btn.className = 'submenu-toggle';
		btn.setAttribute( 'aria-expanded', 'false' );
		btn.setAttribute( 'aria-controls', sub.id );
		btn.setAttribute( 'aria-label', 'Show ' + link.textContent.trim() + ' submenu' );
		btn.innerHTML = '<svg class="icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>';
		link.after( btn );
		btn.addEventListener( 'click', () => {
			const open = sub.classList.toggle( 'is-open' );
			btn.setAttribute( 'aria-expanded', String( open ) );
		} );
	} );

	/* Rotators (testimonials, image slider) ---------------------------- */
	$$( '[data-rotator]' ).forEach( ( root ) => {
		const items = $$( '[data-rotator-item]', root );
		const dots = $$( '[data-rotator-dot]', root );
		if ( items.length < 2 ) {
			return;
		}
		let index = 0;
		let timer = null;

		const show = ( next ) => {
			index = ( next + items.length ) % items.length;
			items.forEach( ( el, i ) => { el.hidden = i !== index; } );
			dots.forEach( ( dot, i ) => dot.setAttribute( 'aria-current', String( i === index ) ) );
		};

		$$( '[data-rotator-next]', root ).forEach( ( btn ) => btn.addEventListener( 'click', () => show( index + 1 ) ) );
		dots.forEach( ( dot ) => dot.addEventListener( 'click', () => show( Number( dot.dataset.rotatorDot ) ) ) );

		const delay = Number( root.dataset.rotatorAuto );
		if ( delay && ! reduceMotion ) {
			const start = () => { timer = window.setInterval( () => show( index + 1 ), delay ); };
			const stop = () => window.clearInterval( timer );
			root.addEventListener( 'mouseenter', stop );
			root.addEventListener( 'mouseleave', start );
			root.addEventListener( 'focusin', stop );
			root.addEventListener( 'focusout', start );
			start();
		}
	} );

	/* Tabs ------------------------------------------------------------ */
	$$( '[data-tabs]' ).forEach( ( root ) => {
		const tabs = $$( '[role="tab"]', root );
		const select = ( tab ) => {
			tabs.forEach( ( t ) => {
				const on = t === tab;
				t.setAttribute( 'aria-selected', String( on ) );
				t.tabIndex = on ? 0 : -1;
				document.getElementById( t.getAttribute( 'aria-controls' ) ).hidden = ! on;
			} );
		};
		tabs.forEach( ( tab, i ) => {
			tab.addEventListener( 'click', () => select( tab ) );
			tab.addEventListener( 'keydown', ( e ) => {
				const step = { ArrowRight: 1, ArrowLeft: -1 }[ e.key ];
				if ( step ) {
					const next = tabs[ ( i + step + tabs.length ) % tabs.length ];
					select( next );
					next.focus();
				}
			} );
		} );
	} );

	/* Category filters, sort and "load more" --------------------------- */
	$$( '[data-filter-group]' ).forEach( ( root ) => {
		const grid = $( '[data-filter-items]', root );
		if ( ! grid ) {
			return;
		}
		const cards = Array.from( grid.children );
		const empty = $( '.filter-empty', root );
		const more = $( '[data-load-more]', root );
		let current = 'all';
		let expanded = false;

		const apply = () => {
			let visible = 0;
			cards.forEach( ( card ) => {
				const match = current === 'all' || card.dataset.cat === current;
				const collapsed = ! expanded && current === 'all' && card.hasAttribute( 'data-more' );
				card.hidden = ! match || collapsed;
				visible += card.hidden ? 0 : 1;
			} );
			if ( empty ) {
				empty.hidden = visible > 0;
			}
			if ( more ) {
				more.hidden = expanded || current !== 'all';
			}
		};

		$$( '[data-filter]', root ).forEach( ( btn ) => {
			btn.addEventListener( 'click', () => {
				current = btn.dataset.filter;
				$$( '[data-filter]', root ).forEach( ( b ) => b.classList.toggle( 'is-active', b === btn ) );
				apply();
			} );
		} );

		if ( more ) {
			more.addEventListener( 'click', () => { expanded = true; apply(); } );
		}

		const sort = $( '[data-sort]', root );
		if ( sort ) {
			sort.addEventListener( 'change', () => {
				const sorted = sort.value === 'az'
					? cards.slice().sort( ( a, b ) => ( a.dataset.title || '' ).localeCompare( b.dataset.title || '' ) )
					: cards;
				sorted.forEach( ( card ) => grid.appendChild( card ) );
			} );
		}
	} );

	/* Document search ------------------------------------------------- */
	$$( '[data-filter-input]' ).forEach( ( input ) => {
		const list = $( input.dataset.filterInput );
		if ( ! list ) {
			return;
		}
		const items = $$( '[data-filter-text]', list );
		const empty = $( '.doc-list__empty', list );
		input.addEventListener( 'input', () => {
			const q = input.value.trim().toLowerCase();
			let shown = 0;
			items.forEach( ( item ) => {
				item.hidden = q !== '' && ! item.dataset.filterText.includes( q );
				shown += item.hidden ? 0 : 1;
			} );
			if ( empty ) {
				empty.hidden = shown > 0;
			}
		} );
	} );

	/* Preview-only forms --------------------------------------------- */
	const message = ( form, text ) => {
		let msg = form.nextElementSibling;
		if ( ! msg || ! msg.classList.contains( 'form-msg' ) ) {
			msg = document.createElement( 'p' );
			msg.className = 'form-msg';
			msg.setAttribute( 'role', 'status' );
			form.after( msg );
		}
		msg.textContent = text;
	};

	$$( '[data-demo-form]' ).forEach( ( form ) => {
		form.addEventListener( 'submit', ( e ) => {
			e.preventDefault();
			if ( ! form.reportValidity() ) {
				return;
			}
			form.reset();
			message( form, 'Thank you! We have received your details and will be in touch soon.' );
		} );
	} );

	/* Donate form → thank-you page ------------------------------------ */
	const donate = $( '[data-donate-form]' );
	if ( donate ) {
		const custom = donate.elements.custom;
		const presets = $$( 'input[name="preset"]', donate );
		custom.addEventListener( 'input', () => {
			if ( custom.value ) {
				presets.forEach( ( p ) => { p.checked = false; } );
			}
		} );
		presets.forEach( ( p ) => p.addEventListener( 'change', () => { custom.value = ''; } ) );

		donate.addEventListener( 'submit', ( e ) => {
			e.preventDefault();
			const checked = presets.find( ( p ) => p.checked );
			const amount = Number( custom.value || ( checked && checked.value ) || 0 );
			if ( ! amount || amount < 1 ) {
				custom.setCustomValidity( 'Please choose or enter an amount.' );
				custom.reportValidity();
				custom.setCustomValidity( '' );
				return;
			}
			if ( ! donate.reportValidity() ) {
				return;
			}
			// Prefixed keys: "name" and similar are reserved WordPress query vars.
			const params = new URLSearchParams( {
				pf_amount: String( amount ),
				pf_purpose: donate.elements.purpose.value,
				pf_donor: donate.elements.name.value,
				pf_email: donate.elements.email.value,
				pf_phone: donate.elements.phone.value,
			} );
			const base = ( window.PF && window.PF.thankYouUrl ) || '/thank-you/';
			window.location.href = base + ( base.includes( '?' ) ? '&' : '?' ) + params.toString() + '#receipt';
		} );
	}

	/* Receipt ----------------------------------------------------------- */
	const receipt = $( '[data-receipt]' );
	if ( receipt ) {
		const params = new URLSearchParams( window.location.search );
		if ( params.has( 'pf_amount' ) ) {
			const amount = Number( params.get( 'pf_amount' ) ) || 0;
			const now = new Date();
			const year = now.getFullYear();
			const values = {
				amount: amount.toLocaleString( 'en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 } ),
				purpose: params.get( 'pf_purpose' ),
				name: params.get( 'pf_donor' ),
				email: params.get( 'pf_email' ),
				phone: params.get( 'pf_phone' ) || '—',
				date: now.toLocaleString( 'en-IN', { day: 'numeric', month: 'short', year: 'numeric', hour: 'numeric', minute: '2-digit' } ),
				number: 'PF/' + year + '-' + String( year + 1 ).slice( 2 ) + '/' + String( now.getTime() ).slice( -6 ),
			};
			$$( '[data-field]', receipt ).forEach( ( el ) => {
				const value = values[ el.dataset.field ];
				if ( value ) {
					el.textContent = value;
				}
			} );
		}
	}

	$$( '[data-print]' ).forEach( ( btn ) => btn.addEventListener( 'click', () => window.print() ) );

	$$( '[data-share]' ).forEach( ( btn ) => {
		btn.addEventListener( 'click', async () => {
			const data = { title: document.title, text: btn.dataset.shareText, url: window.location.origin };
			try {
				if ( navigator.share ) {
					await navigator.share( data );
				} else if ( navigator.clipboard ) {
					await navigator.clipboard.writeText( data.text + ' ' + data.url );
					btn.blur();
					message( btn.parentElement, 'Link copied — share it anywhere!' );
				}
			} catch ( err ) {
				// Share sheet dismissed.
			}
		} );
	} );
}() );
