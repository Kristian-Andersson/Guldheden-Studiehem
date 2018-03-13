<?php if( have_rows('dropdown_button') ):

	while( have_rows('dropdown_button') ): the_row();



		?>
				<style>
				 button.btn.btn-primary.collapsed, .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:focus, .btn-primary.focus, .btn-primary:active:hover,
				 .btn-primary.active:hover,
				 .open > .dropdown-toggle.btn-primary:hover,
				 .btn-primary:active:focus,
				 .btn-primary.active:focus,
				 .open > .dropdown-toggle.btn-primary:focus,
				 .btn-primary:active.focus,
				 .btn-primary.active.focus,
				 .open > .dropdown-toggle.btn-primary.focus {
					background-color: <?php the_sub_field('button_color'); ?> ;
					outline: none;
				}
				</style>

				<button type="button" class="btn btn-primary collapsed" data-toggle="collapse" data-target="#pul"><?php the_sub_field('button_text'); ?><span class="caret"></span></button>

        <div id="pul" class="collapse">
          <div id="pul" class="in collapse" style="height: auto;">
            <div class="well">
              <?php the_sub_field('button_content'); ?>
            </div>
          </div>
        </div>

	<?php endwhile; ?>

<?php endif; ?>
