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

function gk_render_section_skill($skill, $index) {
	$skill_icon_url = wp_get_attachment_image_url( $skill['icon'] );

	if ( $index < 4 ) {
		$degree = 260 + ($index * 26);
	} else {
		$degree = ($index - 4) * 26;
	}

	$style = 'transform: rotate(' . $degree . 'deg) translate(205px) rotate(-' . $degree . 'deg)';
	?>

	<div class="section__skill<?php echo $index === 0 ? ' section__skill--active' : '' ?>" style="<?php echo $style ?>">
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
			<div class="section__skills">
				<?php foreach ( $skills as $index => $skill ) {
					gk_render_section_skill( $skill, $index );
				} ?>
			</div><!-- /.section__skills -->
			
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
		</div><!-- /.section__body -->
	</div><!-- /.container -->
</div><!-- /.section-skills -->
