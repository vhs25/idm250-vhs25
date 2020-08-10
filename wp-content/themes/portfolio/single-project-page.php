<?/**php 
get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="">
        <?php  the_category(); ?>
        <!-- Main Content -->
        <div id="hero">
          <?php the_post_thumbnail(); ?>
          <h1 class="h1_single"><?php the_title(); ?></h1>
        </div>
          
          <div class="intro">
            <?php the_excerpt();?>
          </div>

          <div class="page-builder">
            <?php the_content(); ?>
          </div>
            <?php the_tags(); ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>**/


/**
 * The template for displaying all project posts.
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title"><?php the_title(); ?></h1>
          <?php the_post_thumbnail(); ?>
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="column column-sidebar">
          <?php if (get_field('project_client')): ?>
            <p>Client: <?php the_field('project_client') ?></p>
          <?php endif; ?>

          <p>Year: <?php the_date('Y') ?></p>

          <?php if (get_field('technology')): ?>
            <p>Tech Stack: <?php the_field('technology') ?></p>
          <?php endif; ?>

          <?php
            $link = get_field('project_link');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
            <p>Link: <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
          <?php endif; ?>

        </div>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>