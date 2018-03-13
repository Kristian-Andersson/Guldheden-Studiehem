<?php if( have_rows('content_button') ):

	while( have_rows('content_button') ): the_row();

		// vars
		$link = get_sub_field('button_link');


		?>

				<a href="<?php echo $link['url']; ?>" class="btn-primary btn btn-lg" style="background-color: <?php the_sub_field('button_color'); ?>"><?php echo $link['title']; ?></a>



	<?php endwhile; ?>

<?php endif; ?>
