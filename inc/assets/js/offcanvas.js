document.addEventListener('DOMContentLoaded', function() {
	jQuery( function ( $ ) {
		'use strict';

		$('[data-toggle="offcanvas"]').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open');
			$('html').toggleClass('offcanvas-open');
		});
		
	});
});