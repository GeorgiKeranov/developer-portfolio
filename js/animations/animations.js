export default function animations() {
	let $elementsWithAnimations = $('.animation');

	if (!$elementsWithAnimations.length) {
		return;
	}

	let $window = $(window);
	let $document = $(document);

	let windowHeight = $window.height();
	let windowOffset = windowHeight / 3.5;

	$window.on( 'load scroll resize orientationchange', function() {
		windowHeight = $window.height();

		$elementsWithAnimations.each(function() {
			const $element = $(this);

			if ($element.hasClass('animated')) {
				return;
			}

			let animationClass = $element.data('animation');

			let visibleHeight = $document.scrollTop() + windowHeight;
			let elementTopPosition = $element.offset().top + windowOffset;

			if ( elementTopPosition < visibleHeight ) {
				$element.addClass(animationClass);
				$element.addClass('animated');
			}
		});	
	});
}
