<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=0;" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>id="body">

<?php 
   /* $simple_head=**/
?>
<?php if(is_home() || is_front_page()): ?>

<div class="fancy_head">
    <div class="head">
        <div class="head_logo">
            <a href="http://vstauffer.net/">
                <img src="/wp-content/uploads/2020/07/logo.png" alt="painted header reading Victoria Stauffer" class="small">
                <img src="/wp-content/uploads/2020/09/logo_large.png" alt="painted header reading Victoria Stauffer" class="large">
            </a>
        </div>

        <picture class="portrait">
            <img src="/wp-content/uploads/2020/09/wp_portrait.png" alt="painted portrait of me" >
        </picture>
            <?php wp_nav_menu(['theme_location' => 'portfolio-menu']);?>
            <?php get_sidebar( 'primary' ); ?>
    </div>

<?php else: ?>

<section class="flex-page">
<div class="head_flex">
<div class="simple_head">
    <div class="top">
    <div class="head_logo">
        <a href="http://vstauffer.net/">
            <img src="/wp-content/uploads/2020/07/logo.png" alt="Painted header reading Victoria Stauffer">
        </a>
    </div>
    <?php wp_nav_menu(['theme_location' => 'portfolio-menu']);?>

    </div>    
    <?php get_sidebar( 'blog-sidebar' ); ?>
</div>

<?php endif; ?>
</div>
</div>

