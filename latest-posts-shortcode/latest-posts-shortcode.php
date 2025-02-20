<?php
/**
 * Plugin Name: Latest Posts Shortcode
 * Description: Adds a shortcode [latest_posts] to display the latest blog posts.
 * Version: 1.0
 * Author: alexphex & ChatGPT
 */

// prohibit direct access
if (!defined('ABSPATH')) {
    exit;
}

// shortcode processing function
function lps_latest_posts_shortcode($atts) {
    // set default parameters
    $atts = shortcode_atts(
        array(
            'count' => 5, // by default 5 posts
        ), 
        $atts, 
        'latest_posts'
    );

    // convert the count parameter to a number
    $count = intval($atts['count']);

    // create WP_Query to get posts
    $query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $count,
    ));

    if ($query->have_posts()) {
        $output = '<ul>';

        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }

        $output .= '</ul>';
        wp_reset_postdata();
    } else {
        $output = '<p>Any posts.</p>';
    }

    return $output;
}

// registering a shortcode
add_shortcode('latest_posts', 'lps_latest_posts_shortcode');
