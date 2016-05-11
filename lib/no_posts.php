<?php

class NoPosts {
  function filters() {
    add_filter('register_post_type_args', [ $this, 'filter_register_post_type_args' ], 10, 2);
  }

  function actions() {
    add_action('admin_menu', [ $this, 'adjust_the_wp_menu' ]);
  }

  function adjust_the_wp_menu() {
    remove_submenu_page('edit-tags.php?taxonomy=category', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit-tags.php?taxonomy=category', 'edit-tags.php?taxonomy=post_tag');
  }

  function filter_register_post_type_args($args, $post_type) {
    if ($post_type == 'post') {
      $args['capability_type'] = 'no_post';
    }

    return $args;
  }
}
