<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package abs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('loop-entry'); ?>>
	<header class="loop-entry-header">
		<?php
			the_title( '<h1 class="loop-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php abs_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abs' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //abs_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
