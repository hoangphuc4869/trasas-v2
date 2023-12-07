<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/vendor/FontAwesome6.4Pro/css/all.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/custom.css">
    <title>
        <?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
</head>

<body>

    <div class="container-fluid px-0 header-wrap">
        <div class="logo">
            <a href="<?php echo home_url() ?>"><img src="<?php echo get_field('logo-img', 'option')?>" alt=""></a>
        </div>
        <div class="m-wrap">
            <div class="menu">
                <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
            </div>
            <div class="menu m2"></div>
            <div class="menu m3"></div>
        </div>
        <div class="bars">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="menu-mobile">
            <?php wp_nav_menu (
			    array('theme_location' => 'menu-2', 'menu_class' => 'm-mobile'));?>
        </div>


    </div>