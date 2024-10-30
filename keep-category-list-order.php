<?php
/*
Plugin Name: Keep Category List Order 
Plugin URI: https://wordpress.org/plugins/keep-category-list-order/
Description: Keep the category hierarchy order on the post editing screen
Version: 0.0.3
Author: FALEME Jonathan
Author URI: https://omitsumorikudasai.com/
License: GPL2
*/

function khco() {
    // Run only in admin
    if (is_admin() && add_action('wp_terms_checklist_args', 'khco')) {
        // Change checked_ontop to false
        $args['checked_ontop'] = false;
        // Return the new parameter
        return $args;
    }
}

function after_setup_theme_khco() {
	khco();
}

add_action('after_setup_theme', 'after_setup_theme_khco');