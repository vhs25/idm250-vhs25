<?php get_header();?>
    <main class="wrapper">
    <div class="art_detail_wrapper">
        <?php 
        $image = get_field('adp_image');
        if( !empty( $image ) ): ?>
        <img class="art_detail_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        
        <h1 class="art_detail_title"><?php echo get_field('adp_title') ;?></h1>
        <p class="art_detail_description"><?php echo get_field('adp_description'); ?></p>
    </div>
    <div class="push"></div>
</main>
<?php get_footer(); ?>