<?php
$socials = array(
	'github' => carbon_get_theme_option( 'gk_socials_github' ),
	'linkedin' => carbon_get_theme_option( 'gk_socials_linkedin' ),
);

// Clear array elements for empty social links
$socials = array_filter( $socials );

if ( empty( $socials ) ) {
	return;
}
?>

<ul class="socials">
	<?php foreach ( $socials as $name => $link ) : ?>
		<li>
			<a href="<?php echo esc_url( $link ) ?>" target="_blank"><?php echo idt_get_svg('logo-' . $name) ?></a>
		</li>
	<?php endforeach; ?>
</ul><!-- /.socials -->