<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <h1><?php wp_title(''); ?></h1>
      <div class="row">
        <div id="primary" class="col-xs-12">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <article>
            <div id="slider" class="flexslider" style="margin: 0;">
              <ul class="slides">
                <?php the_post_thumbnail(array(1000, 400)); ?>
              </ul>
            </div>
            <h2><?php the_title(); ?></h2>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php the_category(', '); ?>
              </li>
            </ul>
            <?php the_excerpt(); ?>
          </article>
          <?php endwhile; ?>
          <?php else : ?>
            <p>Sorry, no posts could be found with your search word.</p>
          <?php endif; ?>
          <nav class="navigation pagination">
            <?php posts_nav_link(); ?>
          </nav>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
