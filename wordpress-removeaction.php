<?php
add_filter('show_admin_bar', '__return_false');


remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
remove_action('do_feed_atom', 'do_feed_atom', 10, 1);