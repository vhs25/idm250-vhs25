<?php

/* 
* CPT = Custom Post Type
*
* https://developer.wordpress.org/reference/functions/register_post_type/ *
*/

function register_project_cpt(){
    $args = [
        'label'                 => 'Project',
    'labels'                => [
      'name'                  => 'Projects',
      'singular_name'         => 'Project'
    ],
    'supports' => [
      'title',
      'editor',
      'author',
      'thumbnail',
      'excerpt',
      'trackbacks',
      'custom-fields',
      'comments',
      'revisions',
      'page-attributes',
      'post-formats'
  ],
  'taxonomies'            => [],
  'hierarchical'          => false,
  'public'                => true,
  'show_ui'               => true,
  'show_in_menu'          => true,
  'menu_position'         => 5,
  'show_in_admin_bar'     => true,
  'show_in_nav_menus'     => true,
  'can_export'            => true,
  'has_archive'           => false,
  'exclude_from_search'   => false,
  'publicly_queryable'    => true,
  'show_in_rest'          => true,
  // Dash Icons https://developer.wordpress.org/resource/dashicons/#media-audio
  'menu_icon'             => 'dashicons-smiley'
  ];

    register_post_type('projects', $args);
}
add_action('init', 'register_project_cpt');
