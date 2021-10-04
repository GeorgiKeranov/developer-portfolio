<div class="section-selected-projects">
	<div class="container">
		<?php if ( !empty( $args['title'] ) ) : ?>
			<div class="section__title">
				<h2><?php echo esc_html( $args['title'] ) ?></h2>
			</div><!-- /.section__title -->
		<?php endif; ?>

		<?php if ( !empty( $args['projects'] ) ) {
			$projects= $args['projects'];

			$project_ids = array();
			foreach ( $projects as $project ) {
				$project_ids[] = $project['id'];
			}

			get_template_part( 'template-parts/section-projects', null, array( 'projects' => $project_ids ) );
		} ?>

		<div class="section__action">
			<?php gk_render_button( $args['btn_label'], $args['btn_link'], $args['btn_new_tab'], 'btn' ) ?>
		</div><!-- /.section__action -->
	</div><!-- /.container -->
</div><!-- /.section-selected-projects -->
