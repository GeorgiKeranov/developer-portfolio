export default function galleryLightbox() {
	const $gallery = $('.section-gallery-lightbox');

	if (!$gallery.length) {
		return;
	}

	let $previewImage = $gallery.find('.section__preview-image-background');
	let $previousButton = $gallery.find('.section__preview-image-prev');
	let $nextButton = $gallery.find('.section__preview-image-next');
	let $images = $gallery.find('.section__small-images .section__image');

	let imagesCount = $images.length;

	$previousButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $previewImage.data('image-selected');
		let previousImageIndex = currentImageSelected - 1;

		if (currentImageSelected == 0) {
			previousImageIndex = imagesCount - 1;
		}

		changePreviewImage(previousImageIndex);
	});

	$nextButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $previewImage.data('image-selected');
		let previousImageIndex = currentImageSelected + 1;

		if (currentImageSelected == (imagesCount - 1)) {
			previousImageIndex = 0;
		}

		changePreviewImage(previousImageIndex);
	});

	$images.on('click', function(e) {
		e.preventDefault();

		let imageIndex = $(this).index();

		changePreviewImage(imageIndex);
	});

	function changePreviewImage(imageIndex) {
		let $image = $images.eq(imageIndex);
		if (!$image.length) {
			return;
		}

		const activeClass = 'section__image--active';
		if ($image.hasClass(activeClass)) {
			return;
		}

		let $currentActiveImage = $gallery.find('.' + activeClass);
		if ($currentActiveImage.length) {
			$currentActiveImage.removeClass(activeClass);
		}

		$image.addClass(activeClass);

		let $imageBackground = $image.find('.section__image-background');
		if (!$imageBackground.length) {
			return;
		}

		let imageUrl = $imageBackground.data('image-large');

		$previewImage.data('image-selected', imageIndex);
		$previewImage.css('background-image', 'url(' + imageUrl + ')');
	}
}