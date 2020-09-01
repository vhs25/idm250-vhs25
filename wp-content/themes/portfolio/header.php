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

<section class="flex-page">
<div class="head_flex">
<div class="simple_head">
    <div class="top">
    <div  class="head_logo">
        <a href="http://localhost:8888/idm250-vhs25/">
            <img src="http://localhost:8888/idm250-vhs25/wp-content/uploads/2020/07/logo.png" alt="Painted header reading Victoria Stauffer">
        </a>
    </div>

    <div class="nav">
        <a href="archive.php">projects</a>
        <a href="archive.php">artwork</a>
    </div>
    </div>    
    <?php wp_nav_menu(['theme_location' => 'portfolio-menu']);?>
</div>

<!--
<div class="fancy_head">
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
-->
</div>
</div>

