<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="index.php">
                <img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/07/logo.png" alt="painted header reading Victoria Stauffer" class="small">
                <img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/09/logo_large.png" alt="painted header reading Victoria Stauffer" class="large">
            </a>
        </div>

        <picture class="portrait">
            <img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/09/wp_portrait.png" alt="painted portrait of me" >
        </picture>
        <div class="nav_wrapper">
            <?php wp_nav_menu(['theme_location' => 'portfolio-menu']);?>
        </div>
    </div>

<?php else: ?>

<section class="flex-page">
<div class="head_flex">
<div class="simple_head">
    <div class="top">
    <div  class="head_logo">
        <a href="http://localhost:8888/idm250-vhs25/">
            <img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/07/logo.png" alt="Painted header reading Victoria Stauffer">
        </a>
    </div>
    <?php wp_nav_menu(['theme_location' => 'portfolio-menu']);?>
    </div>    
</div>

<?php endif; ?>
</div>
</div>

