<?php get_header();?>
<!--
<body id="body">
    <div class="head">
        <div class="head_logo">
            <a href="index.php">
                <img src="small/logo_small.png" alt="painted header reading Victoria Stauffer" class="small">
                <img src="large/logo_large.png" alt="painted header reading Victoria Stauffer" class="large">
            </a>
        </div>

        <picture class="portrait">
            <img
                 src="med/portrait_med.png" alt="painted portrait of myself, purple monochrome."
                 sizes="50vw" 
                 srcset="med/portrait_med.png 800vw,
                         large/portait_large.png 1000vw">
        </picture>

        <div class="nav">
            <a href="archive.php">projects</a>
            <a href="archive.php">artwork</a>
        </div>
    </div>

    

    <main>
    
    <?php while (have_posts()) : the_post(); ?>
    <div class="page_builder"> <?php the_content(); ?> </div>
    <?php endwhile; ?>

    <div class="body_head">Hello,</div>
    <div class="body_txt">
            <p>My name is Victoria Stauffer. I am a second-year student at Drexel University, enrolled in the Interactive Digital Media program.  So far my interests for this major lie in creative problem solving and in the psychological research contributing to UI and UX Design.</p>
            <p>Outside of this major I'm interested in environmentalism and sustainable living, and social politics.</p>
            <p>As a hobby, I love to draw and paint. I have been practicing fine art since high school and it's one of the things that drew me to the IDM program.</p>
    </div>
    </main>
    -->
    <?php get_footer();?>