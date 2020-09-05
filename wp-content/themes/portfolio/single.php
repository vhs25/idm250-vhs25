<?php 
get_header();?>
<main class="main-content" id="single">
  <?php while (have_posts()) : the_post(); ?>
    <div class="single_main">
        <?php  the_category(); ?>
        <!-- Main Content -->
        <div id="hero">
          <?php the_post_thumbnail(); ?>
          <h1 class="h1_single"><?php the_title(); ?></h1>
        </div>
          <div class="page-builder project-page">
            <?php the_content(); ?>
          </div>
            <?php the_tags(); ?>
        </div>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>