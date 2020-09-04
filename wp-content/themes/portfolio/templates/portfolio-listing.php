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
            <div class="tile">  
            <a href="<?php echo get_the_permalink()?>">
                <div class="post_thumbnail"><?php echo get_the_post_thumbnail()?></div>
                <h2><?php the_title(); ?></h2>
                <p> </p>
            </a>
        </div>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Sorry, no results</h2>
        <?php endif; ?>
    </div>

    <div class="push"></div>
</main>
<?php get_footer(); ?>