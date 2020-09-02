<?php
/*
Template Name: Portfolio Listing
*/
?>
<?php get_header();?>
    <main class="wrapper">

    <?php

       if( is_page('art-portfolio')){
            $args = [
                'post_type'      => 'art_posts',
                'post_status'    => 'publish'
            ];
            $query = new WP_Query($args);
       }
       elseif(is_page('projects')){
            $args = [
                'post_type'      => 'projects',
                'post_status'    => 'publish'
            ];
            $query = new WP_Query($args);
       }
       ?>

       <div class="all_tiles">
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();?>  
            <a class="tile" href="<?php echo get_the_permalink()?>">
                <div class="post_thumbnail"><?php echo get_the_post_thumbnail()?></div>
                <h2><?php the_title(); ?></h2>

    </a>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Sorry, no results</h2>
        <?php endif; ?>
    </div>
    <?php



    // The Query
    // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters
    /*
    $project_posts = get_field('projects');
    $art_posts =[];

    $args = [
      'post_type'      => 'art_posts',
      'post_status'    => 'publish'
    ];
    $query = new WP_Query($args);
  ?>

  <?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>  
     
            <!-- For Each Loop-->
            <?php
            if( $art_posts ): ?>
                <ul>
                <?php foreach( $art_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
            <?php endif; ?>

      

      <?php endwhile; ?>
  <?php else : ?>
    <h2>Sorry, no results</h2>
  <?php endif; **/?>

    <div class="push"></div>
</main>
<?php get_footer(); ?>