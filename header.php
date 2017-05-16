<!DOCTYPE html>
<html>

<?php ?>
<head>
    <title>DaskalWeb</title>
    <meta name="author" content="Vukašin Daskalović">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta charset="UTF-8">


    <meta property="og:site_name" content="DaskalWeb"/>
    <meta property="og:title" content="DaskalWeb"/>
    <meta property="og:description" content="#"/>
    <meta property="og:url" content="http://"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="http://">
</head>

<body>
<header>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
</header>
<div class="container-full">

<?php wp_head(); ?>