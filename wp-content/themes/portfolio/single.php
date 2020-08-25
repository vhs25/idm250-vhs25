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
<?php get_footer(); ?>
<!--
<body id="single">
<main id="single_main">

    <div id="hero">
        <img src="" alt="'hero' image" class="hero" id="sc1">
    <h1 id="h1_single">Header</h1>
    
    <div id="head" class="example">
    <h2 class="h">Subhead</h2>
    <p class="p_single">Paragraph:   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, expedita enim? Quaerat dolore quo commodi? Facilis culpa accusamus tenetur asperiores unde repudiandae iste voluptatum nam?</p>
    <p class="p_single"><i>Note - Each section will switch between white and a theme color, based on the project's color scheme. I will set this by adding classes and root colors to my css.</i></p>
    <p class="p_single"> <a target="_blank" class="a_single">links</a> will be colored to match the theme of the project</p>
    </div>

    <div>
    <h5 class="h">Images</h5>
    <img src="med/1_med.png" alt="image" class="img_single">
    <p class="p_single">Caption: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat porro explicabo non hic ab dolorum.</p>
    </div>

    <div>
    <h5 class="h">Image Grid // Table</h5>
    <div class="grid">
    <img src="small/1_small.png" alt="image"  class="grid_img">
    <img src="small/1_small.png" alt="image"  class="grid_img">
    <img src="small/1_small.png" alt="image"  class="grid_img">
    <img src="small/1_small.png" alt="image"  class="grid_img">
    </div>
    </div>

    <div class="example">
    <h5 class="h">Unordered List</h5>
    <ul>
        <li class="li_single"> one </li>
        <li class="li_single"> two </li>
    </ul>
    </div>

    <div>
    <h5 class="h">Ordered List</h5>
    <ol>
        <li class="li_single"> one </li>
        <li class="li_single"> two </li>
    </ol>
    </div>

    <div>

    </div>

    </div>

<br><br><br><br>
</main>
-->