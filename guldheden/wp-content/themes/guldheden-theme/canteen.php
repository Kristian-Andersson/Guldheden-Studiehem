<?php
/* Template Name: Canteen */
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <?php else : ?>
              <p>No posts were found.</p>
          <?php endif; ?>
            <div class="panel panel-default">
              <table class="table">
                <thead>
                  <tr>
                    <th>Day</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                  </tr>
                </thead>
                <?php get_template_part('foodmenu_rep'); ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>




<?php get_footer(); ?>












<?php get_footer(); ?>
