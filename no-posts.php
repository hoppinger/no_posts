<?php
# Plugin Name: No Posts
# Version: 0.2.0
# Description: WordPress plugin to disable the "post" post type.
# Author: Sebastiaan de Geus
# Author URI: https://www.hoppinger.com/
# Plugin URI: https://github.com/hoppinger/no_posts

add_action('admin_init', function() {
  remove_menu_page( 'edit.php' );
  remove_submenu_page('edit-tags.php?taxonomy=category', 'edit-tags.php?taxonomy=category');
  remove_submenu_page('edit-tags.php?taxonomy=category', 'edit-tags.php?taxonomy=post_tag');
});

add_action( 'admin_bar_menu', function($wp_admin_bar) {
  $wp_admin_bar->remove_node( 'new-post' );
});

add_action( 'wp_dashboard_setup', function() {
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
});
