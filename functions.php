<?php 

function carousel_files() {
    wp_enqueue_script('call-carousel', get_theme_file_uri('/assets/js/base.js'), null, microtime(), true);
}
add_action('wp_enqueue_scripts','carousel_files');