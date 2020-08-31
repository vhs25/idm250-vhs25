    <main class="wrapper">
    
    <?php while (have_posts()) : the_post(); ?>
    <div class="page-builder" hidden> <?php the_content(); ?> </div>
    <?php endwhile; ?>
    <?php get_header();?>
    <div class="center_home_content">
    <div class="body_head">Hello,</div>
    <div class="body_txt">
            <p>My name is Victoria Stauffer. I am a junior Drexel University, enrolled in the Interactive Digital Media program.  So far my interests for this major lie in creative problem solving, research contributing to UX Design, and developing a strong skillset to develop websites.</p>
            <p>Outside of this major I'm interested in environmentalism and sustainable living, and as a hobby I love to draw and paint. I have been practicing fine art since high school and it's one of the things that drew me to the IDM program! I have also started to really enjoy sewing. I love altering clothes and creating fun costumes.</p>
            <p>Take a look around! All of my projects, from in and out of school are here on my site!  =☽</p>    
    </div>
</div>
    <div class="push"></div>
    </main>
    <?php get_footer();?>