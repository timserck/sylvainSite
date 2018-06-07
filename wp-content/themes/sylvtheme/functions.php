<?php
/**
 * Created by PhpStorm.
 * User: serck
 * Date: 23-04-18
 * Time: 21:00
 */

function menu_init(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Menu Principal');
}

add_action("after_setup_theme", "menu_init");
add_theme_support( 'post-thumbnails' );




function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');


function wptuts_scripts_with_jquery()
{
    // Register the script like this for a plugin:
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '20160909', true );
    // or
    // Register the script like this for a theme:
   // wp_register_script( 'navigation', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );



function my_filters(){
    $args = array(
        'orderby' => 'date',
        'order' => $_POST['date']
    );

    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $_POST['categoryfilter']
            )
        );

    $query = new WP_Query( $args );

    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
            echo '<h2>' . $query->post->post_title . '</h2>';
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;

    die();
}


add_action('wp_ajax_customfilter', 'my_filters');
add_action('wp_ajax_nopriv_customfilter', 'my_filters');
