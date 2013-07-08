<?php

function base_theme_url($file=""){
	echo trailingslashit(get_template_directory_uri()).$file;
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_scripts() {
	$scripts = array(
		'main.js'
	);
	foreach($scripts as $script){
		wp_enqueue_script(
			$script,
			get_template_directory_uri() . '/js/'.$script
		);
	}
}