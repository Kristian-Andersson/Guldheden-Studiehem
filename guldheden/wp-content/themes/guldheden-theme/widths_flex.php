<?php

// check if the flexible content field has rows of data
if( have_rows('footer_columns_widths', 'options') ):

     // loop through the rows of data
    while ( have_rows('footer_columns_widths', 'options') ) : the_row(); ?>

                    <!-- 25% 25% 25% 25% width -->
      <?php if( get_row_layout() == '25x4_column_width' ):  ?>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('2nd_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('3rd_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('4th_column'); ?>
        </div>

                          <!-- 50% 25% 25% width -->
      <?php  elseif( get_row_layout() == '50_25_25_column_width' ): ?>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('2nd_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('3rd_column'); ?>
        </div>

                        <!-- 25% 25% 50% width -->
      <?php  elseif( get_row_layout() == '25_25_50_column_width' ): ?>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('2nd_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php the_sub_field('3rd_column'); ?>
        </div>

                    <!-- 25% 50% 25% width -->
      <?php  elseif( get_row_layout() == '25_50_25_column_width' ): ?>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php the_sub_field('2nd_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('3rd_column'); ?>
        </div>



                      <!-- 75% 25% width -->
      <?php  elseif( get_row_layout() == '75_25_column_width' ): ?>
        <div class="col-xs-12 col-sm-9 col-md-9">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('2nd_column'); ?>
        </div>



                      <!-- 25% 75% width -->
      <?php  elseif( get_row_layout() == '25_75_column_width' ): ?>
        <div class="col-xs-12 col-sm-3 col-md-3">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-9 col-md-9">
          <?php the_sub_field('2nd_column'); ?>
        </div>



                    <!-- 50% 50% width -->
      <?php  elseif( get_row_layout() == '50_column_width' ): ?>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php the_sub_field('1st_column'); ?>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php the_sub_field('2nd_column'); ?>
        </div>


                      <!-- 100% width -->
      <?php  elseif( get_row_layout() == '100_column_width' ): ?>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <?php the_sub_field('1st_column'); ?>
        </div>


      <?php
      endif;

    endwhile;

else :

    // no layouts found

endif;

?>
