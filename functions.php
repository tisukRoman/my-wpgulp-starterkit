<?php

function project_name_assets(){
  $ASSETS = get_template_directory_uri() . '/assets'; // dir to the assets theme folder

  wp_enqueue_style( 'project-name-main-stylesheet', "{$ASSETS}/css/main.min.css", array(), '1.0.0', 'all' );
  wp_enqueue_script( 'project-name-vendor-script', "{$ASSETS}/js/vendor.min.js", array(), '1.0.0', true );
  wp_enqueue_script( 'project-name-custom-script', "{$ASSETS}/js/custom.min.js", array('project-name-vendor-script'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'project_name_assets');
