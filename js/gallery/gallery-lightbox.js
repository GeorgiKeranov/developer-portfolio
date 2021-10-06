export default function galleryLightbox() {
	const $gallery = $('.section-gallery-lightbox');

	if (!$gallery.length) {
		return;
	}

	let $previewImage = $gallery.find('.section__preview-image-background');
	let $previewImagePreviousButton = $gallery.find('.section__preview-image-prev');
	let $previewImageNextButton = $gallery.find('.section__preview-image-next');
	let $previewImageFullScreenButton = $gallery.find('.section__preview-image-fullscreen');
	
	let $images = $gallery.find('.section__small-images .section__image');
	let imagesCount = $images.length;

	let $galleryZoom = $gallery.find('.section__gallery-zoom');
	let $galleryZoomPreviousButton = $gallery.find('.zoom__control-prev');
	let $galleryZoomNextButton = $gallery.find('.zoom__control-next');
	let $galleryZoomCloseButton = $gallery.find('.zoom__control-close');
	let $galleryZoomImage = $galleryZoom.find('.zoom__image');
	let $galleryZoomCloseOnClick = $galleryZoom.find('.zoom__close-on-click');

	$previewImagePreviousButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $previewImage.data('image-selected');

		changePreviewImage(currentImageSelected, 'previous');
	});

	$previewImageNextButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $previewImage.data('image-selected');

		changePreviewImage(currentImageSelected, 'next');
	});

	$images.on('click', function(e) {
		e.preventDefault();

		let imageIndex = $(this).index();

		changePreviewImage(imageIndex);
	});

	$previewImageFullScreenButton.on('click', function(e) {
		e.preventDefault();

		let imageIndex = $previewImage.index();

		openGalleryZoom(imageIndex);
	});

	$previewImage.on('click', function(e) {
		e.preventDefault();

		let $this = $(this);
		let imageIndex = $this.data('image-selected');
		
		openGalleryZoom(imageIndex);
	});

	$galleryZoomPreviousButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $galleryZoomImage.data('image-selected');

		changeZoomImage(currentImageSelected, 'previous');
	});

	$galleryZoomNextButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $galleryZoomImage.data('image-selected');

		changeZoomImage(currentImageSelected, 'next');
	});

	$galleryZoomCloseOnClick.on('click', function() {
		closeGalleryZoom();
	});

	$galleryZoomCloseButton.on('click', function() {
		closeGalleryZoom();
	});

	function openGalleryZoom(imageIndex) {
		let $image = $images.eq(imageIndex);

		if (!$image.length) {
			return;
		}

		let $imageBackground = $image.find('.section__image-background');
		let imageFullUrl = $imageBackground.data('image-full');

		$galleryZoomImage.attr('src', imageFullUrl);
		$galleryZoomImage.data('image-selected', imageIndex);
		$galleryZoom.addClass('section__gallery-zoom--active');

		$('body').keydown(function(e) {
		let keyPressed = e.keyCode;

			// Left arrrow key pressed
			if (keyPressed == 37) {
				let currentImageSelected = $galleryZoomImage.data('image-selected');

				changeZoomImage(currentImageSelected, 'previous');
			}

			// Right arrow key pressed
			if (keyPressed == 39) {
				let currentImageSelected = $galleryZoomImage.data('image-selected');

				changeZoomImage(currentImageSelected, 'next');
			}

			// Esc key pressed
			if (keyPressed == 27) {
				closeGalleryZoom();				
			}
		});
	}

	function closeGalleryZoom() {
		$galleryZoom.removeClass('section__gallery-zoom--active');

		$('body').unbind();
	}

	function changePreviewImage(imageIndex, previousOrNextImage = false) {
		switch (previousOrNextImage) {
			case 'next':
				if (imageIndex == (imagesCount - 1)) {
					imageIndex = 0;
					break;
				}

				imageIndex = imageIndex + 1;
				break;
		
			case 'previous':
				if (imageIndex == 0) {
					imageIndex = imagesCount - 1;
					break;
				}

				imageIndex = imageIndex - 1;
				break;
		}

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

	function changeZoomImage(imageIndex, previousOrNextImage = false) {
		switch (previousOrNextImage) {
			case 'next':
				if (imageIndex == (imagesCount - 1)) {
					imageIndex = 0;
					break;
				}

				imageIndex = imageIndex + 1;
				break;
		
			case 'previous':
				if (imageIndex == 0) {
					imageIndex = imagesCount - 1;
					break;
				}

				imageIndex = imageIndex - 1;
				break;
		}

		let $image = $images.eq(imageIndex);
		if (!$image.length) {
			return;
		}

		let $imageBackground = $image.find('.section__image-background');
		if (!$imageBackground.length) {
			return;
		}

		let imageUrl = $imageBackground.data('image-full');

		$galleryZoomImage.attr('src', imageUrl);
		$galleryZoomImage.data('image-selected', imageIndex);
	}
}