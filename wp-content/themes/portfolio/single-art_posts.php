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
        <?php 
        $link = get_field('adp_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button art_detail_link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        <?php 
        $link = get_field('adp_link_2');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button art_detail_link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>
    <div class="push"></div>
</main>
<?php get_footer(); ?>