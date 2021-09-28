<?php
if ( empty( $args['skills'] ) ) {
	return;
}

$count_of_skills = count( $args['skills'] );
$split_skills_on_index = intval($count_of_skills / 2);

$is_count_of_skills_odd_number = $count_of_skills % 2 === 1;
if ( $is_count_of_skills_odd_number ) {
	$split_skills_on_index += 1;
}

function gk_render_section_skill($skill, $is_active = false) {
	$skill_icon_url = wp_get_attachment_image_url( $skill['icon'] );
	?>

	<div class="section__skill<?php echo $is_active ? ' section__skill--active' : '' ?>" style="background-image: url(<?php echo $skill_icon_url ?>)">
		<a href="#" data-percentage="<?php echo esc_html( $skill['percentage'] ) ?>" data-name="<?php echo esc_html( $skill['name'] ) ?>">
		</a><!-- /.section__skill -->
	</div><!-- /.section__skill -->
<?php } ?>

<div class="section-skills">
	<div class="container">
		<div class="section__head">
			<?php if ( !empty( $args['title'] ) ) : ?>
				<h2><?php echo esc_html( $args['title'] ) ?></h2>
			<?php endif; ?>

			<?php if ( !empty( $args['description'] ) ) : ?>
				<h4><?php echo esc_html( $args['description'] ) ?></h4>
			<?php endif; ?>
		</div><!-- /.section__head -->

		<div class="section__body">
			<div class="section__skills-left">
				<?php for ( $index = 0; $index < $split_skills_on_index; $index++ ) {
					gk_render_section_skill( $args['skills'][$index] );
				} ?>
			</div><!-- /.section__skills-left -->
			
			<div class="section__percentage">
				<div class="section__skill-name">
					<h3><?php echo $args['skills'][0]['name'] ?></h3>
				</div><!-- /.section__skill-name -->

				<div class="section__percentage">
					<div class="section__percentage-bar">
						<span class="section__percentage-active" style="height: <?php echo $args['skills'][0]['percentage'] ?>"></span>
					</div><!-- /.section__percentage-bar -->
				</div><!-- /.section__percentage -->
			</div><!-- /.section__percentage -->

			<div class="section__skills-right">
				<?php for ( $index = $split_skills_on_index + 1; $index < $count_of_skills; $index++ ) {
					gk_render_section_skill( $args['skills'][$index] );
				} ?>
			</div><!-- /.section__skills-right -->
		</div><!-- /.section__body -->
	</div><!-- /.container -->
</div><!-- /.section-skills -->
