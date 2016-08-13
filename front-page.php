<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abs
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<section class="light">
				<h2>Full Stack Web Development</h2>
				<span class="supportive-text">To build great websites, I need to have a solid workflow which is described below.</span>

				<div class="spotlights">
					<div class="item">
						<div class="icon">
							<img src="<?php echo IMAGES . '/icon-full-stack.png' ;?>" alt="">
						</div>
						<div class="item-details">
							<h3>Research & Discovery</h3>
							<p>
								First things first. You tell me what you need.
								I ask you few questions about your requirements.
								We consider all the possibilities and define a
								scope for the project.
							</p>
						</div>

					</div>

					<div class="item">
						<div class="icon">
							<img src="<?php echo IMAGES . '/icon-design.png' ;?>" alt="">
						</div>
						<div class="item-details">
							<h3>Design</h3>
							<p>
								Once we identified what needs to be build,
								I will prepare the mockups for every screen on your website.
								We can fix various design issues in this stage and prepare for the real action.
							</p>
						</div>
					</div>

					<div class="item">
						<div class="icon">
							<img src="<?php echo IMAGES . '/icon-dev.png' ;?>" alt="">
						</div>
						<div class="item-details">
							<h3>Development</h3>
							<p>
								Action begins. I put on my coding hat and spend my
								days and nights  bringing the designs to life.
								I ensure everything works as expected.
							</p>
						</div>
					</div>

					<div class="item">
						<div class="icon">
							<img src="<?php echo IMAGES . '/icon-maintenance.png' ;?>" alt="">
						</div>
						<div class="item-details">
							<h3>CHANGES & MAINTENANCE</h3>
							<p>
								You will be able to update the content on your
								website yourself. In case you want to add/update
								some features, we can achieve that with minimum
								costs and efforts.
							</p>
						</div>
					</div>
				</div>

			</section>

			<section class="dark">
				<h2>Recent Projects</h2>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
