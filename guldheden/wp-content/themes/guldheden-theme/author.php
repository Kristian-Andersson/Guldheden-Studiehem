<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <h1>Created by: <?php the_author(); ?></h1>
      <div class="row">
        <div id="primary" class="col-xs-12">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <article>
            <div id="slider" class="flexslider" style="margin: 0;">
              <ul class="slides">
                <?php the_post_thumbnail(); ?>
              </ul>
            </div>
            <h2><?php the_title(); ?></h2>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <?php the_author(); ?>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php the_category(', '); ?>
              </li>
            </ul>
            <?php the_excerpt(); ?>
          </article>
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
