<?php

namespace CustomPosts;

use WP_Query;

\CustomPosts\initialize();

function initialize()
{
    add_action('init', '\CustomPosts\custom_post_type', 0);
    add_action('init', '\CustomPosts\custom_taxonomy_type', 0);
    add_action('admin_init', '\CustomPosts\admin_init');

    add_action('save_post_tabler', '\CustomPosts\save_twitter_handle');
    add_action('save_post_tabler', '\CustomPosts\save_instagram_handle');
    add_action('save_post_tabler', '\CustomPosts\save_tiktok_handle');
    add_action('save_post_tabler', '\CustomPosts\save_facebook_handle');
}

function custom_post_type()
{
    // Set UI labels for Custom Post Type Tablers
    $labels = array(
        'name'                => _x('Tablers', 'Post Type General Name', 'fewer'),
        'singular_name'       => _x('Tabler', 'Post Type Singular Name', 'fewer'),
        'menu_name'           => __('Tablers', 'fewer'),
        'parent_item_colon'   => __('Parent Tabler', 'fewer'),
        'all_items'           => __('All Tablers', 'fewer'),
        'view_item'           => __('View Tabler', 'fewer'),
        'add_new_item'        => __('Add New Tabler', 'fewer'),
        'add_new'             => __('Add New', 'fewer'),
        'edit_item'           => __('Edit Tabler', 'fewer'),
        'update_item'         => __('Update Tabler', 'fewer'),
        'search_items'        => __('Search Tabler', 'fewer'),
        'not_found'           => __('Not Found', 'fewer'),
        'not_found_in_trash'  => __('Not found in Trash', 'fewer'),
    );

    // Set other options for Custom Post Type
    $args = array(
        'label'               => __('tabler', 'fewer'),
        'description'         => __('Tablers listings', 'fewer'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('line'),
        'rewrite' => array('slug' => 'tabler', 'with_front' => false),
        /* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 15,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => TRUE

    );

    // Registering Custom Post Type Blogs
    register_post_type('tabler', $args);
}

function custom_taxonomy_type()
{
    register_taxonomy(
        'tabler',
        'line',
        array(
            'labels'    => array(
                'name'  => 'Line',
                'add_new_item'  => 'Add New Line',
                'new_item_name' => 'New Line'
            ),
            'show_ui'   => TRUE,
            'show_tagcloud' => FALSE,
            'hierarchical'  => TRUE
        )
    );
}



/**
 * Custom Fields in Posts
 */
function admin_init()
{
    add_meta_box('twitter_handle_meta', 'Twitter handle', '\CustomPosts\twitter_handle', 'tabler', 'side');
    add_meta_box('instagram_handle_meta', 'Instagram handle', '\CustomPosts\instagram_handle', 'tabler', 'side');
    add_meta_box('tiktok_handle_meta', 'Tiktok handle', '\CustomPosts\tiktok_handle', 'tabler', 'side');
    add_meta_box('facebook_handle_meta', 'Facebook handle', '\CustomPosts\facebook_handle', 'tabler', 'side');

}


function twitter_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $twitter_handle = (isset($custom['twitter_handle'][0])) ? $custom['twitter_handle'][0] : '';
?>
    <label for="twitter_handle">Twitter Handle:</label>
    <input type="text" name="twitter_handle" value="<?php echo $twitter_handle; ?>" />
<?php
}

function save_twitter_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $twitter_handle = isset( $_POST['twitter_handle'] ) ? $_POST['twitter_handle'] : '';

    update_post_meta($post->ID, 'twitter_handle', $twitter_handle);
}

function instagram_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $instagram_handle = (isset($custom['instagram_handle'][0])) ? $custom['instagram_handle'][0] : '';
?>
    <label for="instagram_handle">Instagram Handle:</label>
    <input type="text" name="instagram_handle" value="<?php echo $instagram_handle; ?>" />
<?php
}

function save_instagram_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $instagram_handle = isset( $_POST['instagram_handle'] ) ? $_POST['instagram_handle'] : '';

    update_post_meta($post->ID, 'instagram_handle', $instagram_handle);
}

function tiktok_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $tiktok_handle = (isset($custom['tiktok_handle'][0])) ? $custom['tiktok_handle'][0] : '';
?>
    <label for="tiktok_handle">Tiktok Handle:</label>
    <input type="text" name="tiktok_handle" value="<?php echo $tiktok_handle; ?>" />
<?php
}

function save_tiktok_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $tiktok_handle = isset( $_POST['tiktok_handle'] ) ? $_POST['tiktok_handle'] : '';

    update_post_meta($post->ID, 'tiktok_handle', $tiktok_handle);
}

function facebook_handle()
{
    global $post;
    $custom         = get_post_custom($post->ID);
    $facebook_handle = (isset($custom['facebook_handle'][0])) ? $custom['facebook_handle'][0] : '';
?>
    <label for="facebook_handle">Facebook Handle:</label>
    <input type="text" name="facebook_handle" value="<?php echo $facebook_handle; ?>" />
<?php
}

function save_facebook_handle()
{
    global $post;
    if (empty($post->ID)) return;
    $custom     = get_post_custom($post->ID);
    $facebook_handle = isset( $_POST['facebook_handle'] ) ? $_POST['facebook_handle'] : '';

    update_post_meta($post->ID, 'facebook_handle', $facebook_handle);
}