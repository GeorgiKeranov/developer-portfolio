<?php
if ( empty( $args['skills'] ) ) {
	return;
}

$skills = $args['skills'];
$count_of_skills = count( $skills );
$split_skills_on_index = intval($count_of_skills / 2);

$is_count_of_skills_odd_number = $count_of_skills % 2 === 1;
if ( $is_count_of_skills_odd_number ) {
	$split_skills_on_index += 1;
}

function gk_render_section_skill($skill, $is_active = false) {
	$skill_icon_url = wp_get_attachment_image_url( $skill['icon'] );
	?>

	<div class="section__skill<?php echo $is_active ? ' section__skill--active' : '' ?>">
		<a href="#" data-percentage="<?php echo esc_html( $skill['percentage'] ) ?>%" data-name="<?php echo esc_html( $skill['name'] ) ?>">
			<span style="background-image: url(<?php echo $skill_icon_url ?>)"></span>
		</a>
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
					gk_render_section_skill( $skills[$index], $index === 0 );
				} ?>
			</div><!-- /.section__skills-left -->
			
			<div class="section__skill-selected">
				<div class="section__circle">
					<?php $skill_first = $skills[0]; ?>
					<div class="section__circle-fill" style="height: <?php echo $skill_first['percentage'] ?>%">
					</div><!-- /.section__circle-fill -->
					
					<div class="section__text">
						<h2><?php echo $skill_first['percentage'] ?>%</h2>

						<h3><?php echo $skill_first['name'] ?></h3>
					</div><!-- /.section__text -->
				</div><!-- /.section__circle -->
			</div><!-- /.section__skill-selected -->

			<div class="section__skills-right">
				<?php for ( $index = $split_skills_on_index; $index < $count_of_skills; $index++ ) {
					gk_render_section_skill( $skills[$index] );
				} ?>
			</div><!-- /.section__skills-right -->
		</div><!-- /.section__body -->
	</div><!-- /.container -->
</div><!-- /.section-skills -->
