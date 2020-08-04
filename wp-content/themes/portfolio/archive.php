<?php get_header();?>

<main>

    <?php while (have_posts()) : the_post(); ?>
    <div class="page_builder"> <?php the_content(); ?> </div>
    <?php endwhile; ?>
<!--
    <div class="all_tiles">
            <div class="tile">
                    <img src="tiles/zodiac_tile.png" alt="image of the home screen of my fashion app prototype">
                    <header>Zodiac Website</header>
                    <p>View my <a href="zodiac/index.html" target="_blank">Zodiac Website</a>.</p>
                </div>
        <div class="tile">
            <img src="tiles/bow_tile.png" alt="image of the home screen of my fashion app prototype">
            <header>Bow App Prototype</header>
            <p>This is the prototype of my fashion app idea named 'Bow,' created for a class app competition (which I won!).</p>
        </div>
        <div class="tile">
            <img src="tiles/ss_tile.png" alt="image of sweat sensor device">
            <header>Sweat Sensor</header>
            <p>I built this sweat sensor device with Arduino to help solve the problem that is my eternally sweaty hands.</p>
        </div>
        <div class="tile">
            <img src="tiles/hair_tile.png" alt="stippled painting of short curly hair">
            <header>ASMRtistry</header>
            <p>ASMRtistry is a soothing video featuring <a href="https://b7s9.com/" target="_blank">Ben Schenerman's</a> music and a time lapse of our stipple paintings of hair.</p>
        </div>
    </div>
</main>
-->
<?php get_footer();?>