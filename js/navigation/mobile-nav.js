export default function mobileNav() {
	const $header = $('.header');

	if (!$header.length) {
		return;
	}

	const $mobileNavToggleBtn = $header.find('.header__menu-toggle');

	if (!$mobileNavToggleBtn.length) {
		return;
	}

	$mobileNavToggleBtn.on('click', function(e) {
		e.preventDefault();
		
		$header.toggleClass('header--menu-active');
	});
}