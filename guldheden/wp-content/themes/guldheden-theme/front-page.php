<?php get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero">


             <?php get_template_part('slider_imgs'); ?>


            <div class="text">
              <h1><?php the_field('content_title'); ?></h1>
              <p><?php the_field('content_subtitle'); ?></p>
              <br>
              <p><?php get_template_part('button_grp'); ?></p>
              <?php
              $textlink = get_field('content_text_link')
              ?>
              <a href="<?php echo $textlink['url']; ?>" class="small"><?php echo $textlink['title']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
