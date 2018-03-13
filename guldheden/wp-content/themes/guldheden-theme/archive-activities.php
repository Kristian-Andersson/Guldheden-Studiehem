<?php get_header(); ?>


<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
          if ( have_posts() ):
            while ( have_posts() ): the_post(); ?>
            <article>
              <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
            </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>
