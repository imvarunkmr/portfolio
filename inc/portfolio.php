<?php
// Add custom post type
$args = array(
    'label' => 'Portfolio',
    'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
    ),
    'public' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields',
    ),
);
register_post_type( 'varunk_portfolio', $args );


/**
 * Fetches available projects
 * @return projects
 */
function get_slides() {
    $query_args = array(
        'post_type' => 'varunk_portfolio',
        'posts_per_page' => -1,
    );

    return new WP_Query( $query_args );
}

/**
 * Displays portfolio items with the help of slick slider
 */
function vk_portfolio() {
    $query = get_slides();
    if( $query->have_posts() ) : ?>
        <div class="slider-wrap">
            <?php while( $query->have_posts() ) : $query->the_post(); ?>

                <div class="slide">
                    <?php $url = get_post_meta( get_the_ID(), 'url', true ); ?>
                    <a target="_blank" href="<?php echo $url; ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif;
}