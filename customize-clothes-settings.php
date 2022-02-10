<?php 
wp_register_style( 'style.css', plugin_dir_url( __FILE__ ) . 'includes/style.css', );
wp_enqueue_style( 'style.css');

wp_register_style( 'bootstrap.js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', );
wp_enqueue_style( 'bootstrap.js' );

wp_register_script( 'mrkcyc.js', plugin_dir_url( __FILE__ ) . 'includes/mrkcyc.js', );
wp_enqueue_script( 'mrkcyc.js' );


?>