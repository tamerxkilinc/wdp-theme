/* Version number 1.0.2 */

document.addEventListener('DOMContentLoaded', function() {
	
	jQuery( function ( $ ) {
		'use strict';

		$('[data-toggle="offcanvas"]').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open');
			$('.offcanvas-backdrop').toggleClass('open');
			$('html').toggleClass('offcanvas-open');
		});
		
		$('.offcanvas-backdrop').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open');
			$('.offcanvas-backdrop').toggleClass('open');
			$('html').toggleClass('offcanvas-open');
		});
		
	});
	
});