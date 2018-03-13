<?php
/* Template Name: Information */
get_header();
?>


<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-8">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            <?php endwhile; ?>
          <?php else : ?>
            <p>No posts were found.</p>
          <?php endif; ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3 col-md-offset-1" style="margin-top: 2%;">
          <?php wp_nav_menu( array('theme_location' => 'info-menu', 'menu_class' => 'side-menu')); ?>
        </aside>
      </div>
    </div>
  </section>
</main>



<?php get_footer(); ?>
