<?php get_header(); ?>


<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <article>
            <?php the_title('<h1>', '</h1>'); ?>
            <?php the_field('activity_date'); ?>
            <?php the_field('activity_time'); ?>
            <?php the_field('activity_description'); ?>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>
