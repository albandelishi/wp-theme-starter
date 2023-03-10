<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="author" content="Website author">
    <meta name="keywords" content="Comma-separated, site, keywords" />
    <meta name="description" content="Site description between 170 and 190 letters" />
    <meta name="subject" content="Website subject">
    <meta name="copyright" content="© <?php echo date('Y'); ?> | Website tittle" />
    <meta name="robots" content="index,follow">

    <link rel="canonical" href="Website canonical link" />

    <!-- Icons -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/static/images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/static/images/icons/apple-touch-icon-120x120-precomposed.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/static/images/icons/apple-touch-icon-152x152-precomposed.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/static/images/icons/apple-touch-icon-180x180-precomposed.png" />

    <!-- Website tittle -->
    <?php if (is_front_page()) : ?>
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php else : ?>
        <title><?php wp_title(''); ?> | <?php bloginfo('name'); ?></title>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php include "preloader.php"; ?>

        <header class="mb-auto" id="mainHeader">
            <div>
                <h3 class="float-md-start mb-0">Cover</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
            <!-- Navbar -->
            <?php //get_template_part('templates/navs/navbar');
            ?>
        </header>