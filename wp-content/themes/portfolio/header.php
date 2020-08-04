<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <?php wp_head(); ?>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body <?php body_class(); ?>id="body">
<?php wp_nav_menu(['theme_location' => 'primary_menu']);?>

    <div class="top">
    <div  class="head_logo">
        <a href="index.php">
            <img src="med/logo_med.png" alt="painted header reading Victoria Stauffer">
        </a>
    </div>

    <div class="nav">
        <a href="archive.php">projects</a>
        <a href="archive.php">artwork</a>
    </div>
    </div>    