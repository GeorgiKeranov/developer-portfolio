<?php
if ( empty( $args['images'] ) ) {
	return;
}

$images = $args['images'];

$first_image_id = current( $images );
$first_image_large_url = wp_get_attachment_image_url( $first_image_id, 'large' );
?>

<div class="section-gallery-lightbox">
	<div class="section__preview-image">
		<a href="#" class="section__preview-image-prev"><?php echo gk_get_svg('icon-arrow-left') ?></a>

		<a href="#" class="section__preview-image-background" data-image-selected="0" style="background-image: url(<?php echo $first_image_large_url ?>)"></a>

		<a href="#" class="section__preview-image-next"><?php echo gk_get_svg('icon-arrow-right') ?></a>

		<a href="#" class="section__preview-image-fullscreen"><?php echo gk_get_svg('icon-fullscreen') ?></a>
	</div><!-- /.section__preview-image -->

	<div class="section__small-images">
		<?php foreach ( $images as $index => $image_id ) :
			$image_thumbnail_url = wp_get_attachment_image_url( $image_id, 'medium' );
			$image_large_url = wp_get_attachment_image_url( $image_id, 'large' );
			$image_full_url = wp_get_attachment_image_url( $image_id, 'full' );
			?>

			<div class="section__image<?php echo $index === 0 ? ' section__image--active' : '' ?>">
				<a href="#" class="section__image-background" style="background-image: url(<?php echo $image_thumbnail_url ?>)" data-image-large="<?php echo $image_large_url ?>" data-image-full="<?php echo $image_full_url ?>"></a>
			</div>
		<?php endforeach; ?>
	</div><!-- /.section__small-images -->

	<div class="section__gallery-zoom">
		<div class="zoom__close-on-click"></div>

		<span class="zoom__image-center"></span>

		<img class="zoom__image"/>

		<div class="zoom__controls">
			<a href="#" class="zoom__control-prev"><?php echo gk_get_svg('icon-arrow-left') ?></a>
			
			<a href="#" class="zoom__control-next"><?php echo gk_get_svg('icon-arrow-right') ?></a>

			<a href="#" class="zoom__control-close">X</a>
		</div><!-- /.zoom_controls -->
	</div><!-- /.zoom_zoom -->
</div><!-- /.section-gallery-lightbox -->
