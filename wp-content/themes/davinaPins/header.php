<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>


    <?php wp_body_open() ?>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <a href="#" class="header__logo">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.svg">
                </a>
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="#product">
                                Product
                            </a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#about">
                                About Us
                            </a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#reviews">
                                Reviews
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header__btns">
                    <a href="#" class="btn">Website</a>
                    <a href="#form" class="btn-or">
                        Free Quote
                        <span>
                            <img src="<?php echo get_template_directory_uri()?>/img/btn-arrow.svg" alt="arrow icon">
                        </span>
                    </a>
                </div>
                <div class="header__menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>
    <main class="main">