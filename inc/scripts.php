<?php

/**
 * Enqueue scripts and styles.
 */
function jfilipiak_starter_scripts()
{
    wp_enqueue_style('jfilipiak_starter-style', get_stylesheet_uri(), array(), _S_VERSION);


    wp_enqueue_script('jfilipiak_starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'jfilipiak_starter_scripts');
