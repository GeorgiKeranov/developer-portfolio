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
		let previousImageIndex = currentImageSelected - 1;

		if (currentImageSelected == 0) {
			previousImageIndex = imagesCount - 1;
		}

		changePreviewImage(previousImageIndex);
	});

	$previewImageNextButton.on('click', function(e) {
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
		let previousImageIndex = currentImageSelected - 1;

		if (currentImageSelected == 0) {
			previousImageIndex = imagesCount - 1;
		}

		changeZoomImage(previousImageIndex);
	});

	$galleryZoomNextButton.on('click', function(e) {
		e.preventDefault();

		let currentImageSelected = $galleryZoomImage.data('image-selected');
		let previousImageIndex = currentImageSelected + 1;

		if (currentImageSelected == (imagesCount - 1)) {
			previousImageIndex = 0;
		}

		changeZoomImage(previousImageIndex);
	});

	$galleryZoomCloseOnClick.on('click', function() {
		$galleryZoom.removeClass('section__gallery-zoom--active');
	});

	$galleryZoomCloseButton.on('click', function() {
		$galleryZoom.removeClass('section__gallery-zoom--active');
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
	}

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

	function changeZoomImage(imageIndex) {
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