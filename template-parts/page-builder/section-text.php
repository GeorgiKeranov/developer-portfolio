<?php 
$style = '';
$class = '';

if ( !empty( $args['background_image'] ) ) {
	$style = ' style="background-image:url(' . wp_get_attachment_image_url( $args['background_image'], 'full' ) . ')"';
	$class = ' section-text--image-background';
}
?>

<div class="section-text<?php echo $class ?>"<?php echo $style ?>>
	<div class="container">
		<?php echo apply_filters( 'the_content', $args['text'] ) ?>		
	</div><!-- /.container -->
</div><!-- /.section-text -->
