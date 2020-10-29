<?php

/* 
* CPT = Custom Post Type
*
* https://developer.wordpress.org/reference/functions/register_post_type/ *
*/

function register_project_cpt_1(){
    $args = [
        'label'                 => 'Projects',
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
  'taxonomies'            => array( 'category' ),
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



    $args = [
    'label'                 => 'Art Posts',
    'labels'                => [
    'name'                  => 'Art Posts',
    'singular_name'         => 'Art Post'
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
'taxonomies'            => array( 'category' ),
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
'menu_icon'             => 'dashicons-buddicons-activity',
'rewrite'               => [
  'slug'                => 'art',
  'with_front' => false
  ]
];

  register_post_type('art_posts', $args);

  $args = [
    'label'                 => 'Fashion',
    'labels'                => [
    'name'                  => 'Fashion',
    'singular_name'         => 'Fashion'
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
'taxonomies'            => array( 'category' ),
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
'menu_icon'             => 'dashicons-carrot',
'rewrite'               => [
  'slug'                => 'fashion',
  'with_front' => false
  ]
];

  register_post_type('fashion', $args);

  $args = [
    'label'                 => 'Photography',
    'labels'                => [
    'name'                  => 'Photography',
    'singular_name'         => 'Photography'
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
'taxonomies'            => array( 'category' ),
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
'menu_icon'             => 'dashicons-drumstick',
'rewrite'               => [
  'slug'                => 'photography',
  'with_front' => false
  ]
];

  register_post_type('photography', $args);

}


add_action('init', 'register_project_cpt_1');
