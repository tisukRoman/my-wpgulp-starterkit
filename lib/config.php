<?php

function project_name_config(){
  register_nav_menus(
    array(
      'project-name-main-menu' => 'Project Name Main Menu',
      'project-name-secondary-menu' => 'Project Name Secondary Menu',
    )
  );
}

add_action( 'after_setup_theme', 'project_name_config', 0 );
