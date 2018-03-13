<footer id="footer">
  <div class="container">
    <div class="row top">
      <?php get_template_part('widths_flex'); ?>
    </div>
    <div class="row bottom">
      <div class="col-xs-12">
        <p><?php the_field('footer_copyright_text', 'options'); ?></p>
      </div>
    </div>
  </div>
</footer>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<?php wp_footer(); ?>
</body>
</html>
