<?php get_header(); ?>


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
        </div>
      </div>
    </div>
  </section>
</main>



<?php get_footer(); ?>
