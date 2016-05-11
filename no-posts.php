<?php
# Plugin Name: No Posts
# Version: 0.1.0
# Description: WordPress plugin to disable the "post" post type.
# Author: Sebastiaan de Geus
# Author URI: https://www.hoppinger.com/
# Plugin URI: https://github.com/hoppinger/no_posts

require 'lib/no_posts.php';

$no_post = new NoPosts;
$no_post->actions();
$no_post->filters();
