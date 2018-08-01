<?php
/**
 * The template for displaying About page
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
		<div class="main-content-about" role="main">



					<?php while ( have_posts() ) : the_post();
					$strategy = get_field('content_strategy');
					$influencer = get_field('influencer_mapping');
					$social = get_field('social_media');
					$design = get_field('design_and_development');
					$icon1 = get_field('icon_1');
					$icon2 = get_field('icon_2');
					$icon3 = get_field('icon_3');
					$icon4 = get_field('icon_4');
					$image = get_field('header_image');
					?>


					<div class="intro-blurb">
						<img class="header-image" src="<?php the_field('header_image'); ?>" />
						<p>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by
							making our clients visible and making their customers smile.</p>
					</div>

					<div class="intro">
						<h6>Our Services</h6>
							<p><?php the_content(); ?></p>
					</div>


					<div class="content-strategy">
						<figure>
							<img class="bullseye-icon" src="<?php the_field('icon_1'); ?>" alt="bullseye icon" />
						</figure>
						<p class="content-strategy-info"><span class="service-title">Content Strategy</span><br><?php the_field('content_strategy'); ?></p>
					</div>


				<div class="influencer-mapping">
					<p class="influencer-mapping-info"><span class="service-title">Influencer Mapping</span><br><?php the_field('influencer_mapping'); ?></p>
					<figure>
						<img class="atom-icon" src="<?php the_field('icon_2'); ?>" alt="atom icon" />
					</figure>
				</div>


				<div class="social-media">
					<figure>
						<img class="thumb-icon" src="<?php the_field('icon_3'); ?>" alt="thumb icon"/>
					</figure>
					<p class="social-media-info"><span class="service-title">Social Media Strategy</span><br><?php the_field('social_media'); ?></p>
				</div>

				<div class="design-development">
					<p class="design-development-info"><span class="service-title">Design and Development</span></br><?php the_field('design_and_development'); ?></p>
					<figure>
						<img class="pen-icon" src="<?php the_field('icon_4'); ?>" alt="pen icon" />
					</figure>
				</div>



			<div class="contact-us">
				<h3 class="work-with-us">Interested in working with us?</h3>
			</div>
			<div class="contact-link">
				<a class="contact-button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
			</div>






			<?php endwhile; // end of the loop. ?>


		</div><!-- .main-content -->



	</div><!-- #primary -->

<?php get_footer(); ?>
