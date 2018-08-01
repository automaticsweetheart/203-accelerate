<?php
/**
 * The template for displaying 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content-404" role="main">




      <div class="message-four">
          <figure>
            <img class="map-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.jpg">
          </figure>
          <div class="text-four">
            <h3 class="title-four">Whoops, Took a Wrong Turn!</h3>
            <p class="not-found-message">Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.  Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work</a>.</p>
          </div>
      </div>




		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
