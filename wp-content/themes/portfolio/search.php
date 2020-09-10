<?php get_header();?>
    <main class="wrapper">
        <!--Search Function -->
        <div>
            <form action="" method="get" class="search_form">
                <button class="search_button"><img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/09/searchicon.png" alt="search"></button>
                <input type="text" name="s" id="search_field" value="<?php the_search_query();?>">
            </form>
        </div>

        <!-- Search Results -->
        <div class="all_tiles">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();?>
            <div class="tile">  
            <a href="<?php echo get_the_permalink()?>">
                <div class="post_thumbnail"><?php echo get_the_post_thumbnail()?></div>
                <h2><?php the_title(); ?></h2>
                <p> </p>
            </a>
        </div>
            <?php endwhile; ?>
        <?php else : ?>
            <h2 class="sry_no_results">Sorry, no results</h2>
        <?php endif; ?>
    </div>

    <div class="push"></div>
</main>
<?php get_footer(); ?>