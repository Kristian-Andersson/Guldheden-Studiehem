<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?></title>
	<!-- Flexslider -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript">
	var jQuery_1_6_2 = $.noConflict(true);
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
	jQuery_1_6_2(window).load(function() {
		jQuery_1_6_2('.flexslider').flexslider();
	});
	</script>
	<!------------->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<style>
	#header {
		background-color: <?php the_field('header_background_color', 'option'); ?> ;
	}
	#nav {
		background-color: <?php the_field('menu_background_color', 'option'); ?> ;
	}
	.mobile-search form input[type="submit"] {
		background-color: <?php the_field('header_background_color', 'option'); ?> ;
	}
	.mobile-search {
		background-color: <?php the_field('menu_background_color', 'option'); ?> ;
	}
	main {
		background-color: <?php the_field('body_background_color', 'option'); ?> ;
	}
	a, a:hover, a:focus {
		color: <?php the_field('body_links_color', 'option'); ?> ;
	}
	#footer {
		background-color: <?php the_field('footer_background_color', 'option'); ?> ;
	}
	#footer a {
		color: <?php the_field('footer_links_color', 'option'); ?> ;
	}
	</style>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-sm-6">
						<?php /* The websites header name */ ?>
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<?php get_search_form(); ?>
							</div>
						</form>
					</div>
					<div class="col-xs-3 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php get_search_form(); ?>
				</div>
			</form>
		</div>

    <nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

						<?php /* Menu of the website*/ ?>
								<?php wp_nav_menu( array('theme_location' => 'main-menu')); ?>


					</div>
				</div>
			</div>
		</nav>
