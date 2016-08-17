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
				<span class="supportive-text">My workflow is simple yet solid. It helps me in delivering quality websites in time.</span>

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
								We define the scope of project after understanding the requirements.
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
								We can fix various design issues in this stage and prepare for next phase.
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
								I put on my coding hat and spend my
								days and nights  bringing the designs to life.
								I ensure everything works as expected and in an optimized way.
							</p>
						</div>
					</div>

					<div class="item">
						<div class="icon">
							<img src="<?php echo IMAGES . '/icon-maintenance.png' ;?>" alt="">
						</div>
						<div class="item-details">
							<h3>Changes & Maintenance</h3>
							<p>
								You will be able to update most of the content on your
								website yourself. If you need further help in running your website and keep it up to date, I have affordable plans for you.
							</p>
						</div>
					</div>
				</div>

			</section>

			<section class="dark">
				<h2>Recent Projects</h2>

				<?php vk_portfolio(); ?>

				<span class="supportive-text">I have a cool little plugin in official WordPress repository. It has currently 3000+ active users.</span>
				<a target="_blank" class="btn btn-primary repo" href="https://wordpress.org/plugins/easylogo/stats/">Check Plugin</a>
				<span class="btn-support">
					<a href="http://plugins.varunk.co/easylogo/">or see how it works</a>
				</span>
			</section>

			<section class="light">
				<div class="contact-text">
					<h2>Contact me</h2>
					<p>
						I am glad you decided to contact me. Please provide
						some information about your project to get started.
					</p>
					<p>
						I work with fixed price model. My minimum development charges for a standard website are $1000.
					</p>
					<p>
						Currently available from: September 15, 2016
					</p>
				</div>

				<div class="contact-form">
					<?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
				</div>

			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
