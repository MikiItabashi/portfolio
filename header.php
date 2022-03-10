<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://mi6-portfolio.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Miki's Portfolio">
    <meta property="og:description" content="ITコンサル出身のWEB制作フリーランスです">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/common/ogp.png">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Miki's Portfolio">
    <meta name="twitter:description" content="ITコンサル出身のWEB制作フリーランスです">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/assets/images/common/ogp.png">
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/common/favicon.png" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- header -->
    <header class="header">
        <div class="header__wrapper section">
            <a href="<?php echo home_url() ?>" class="header__logo">
                <h1 class="header__title">Miki’s Portfolio</h1>
            </a>
            <!-- /.header__logo -->
            <nav class="header__nav header-nav u-desktop">
                <ul class="header-nav__items">
                    <li class="header-nav__item"><a href="<?php echo home_url() ?>" class="header-nav__link">ホーム</a></li>
                    <li class="header-nav__item"><a href="<?php echo home_url('/works') ?>" class="header-nav__link">制作実績</a></li>
                    <li class="header-nav__item"><a href="<?php echo home_url('/contact') ?>" class="header-nav__link">お問い合わせ</a></li>
                </ul>
                <!-- /.header-nav -->
            </nav>
            <!-- /.header__nav header-nav -->
            <div class="drawer-icon u-mobile">
                <div class="drawer-icon__bars">
                    <div class="drawer-icon__bar1"></div>
                    <div class="drawer-icon__bar2"></div>
                    <div class="drawer-icon__bar3"></div>
                </div>
                <!-- ./drawer-icon__bars -->
            </div>
            <!-- /drawer-icon u-mobile -->
        </div>
        <!-- /.header__wrapper -->
    </header>
    <!-- /.header -->

    <!-- drawer -->
    <div class="drawer-content">
        <div class="drawer-content__items">
            <div class="drawer-content__item"><a href="<?php echo home_url() ?>" class="drawer-content__link">ホーム</a></div>
            <div class="drawer-content__item"><a href="<?php echo home_url('/works') ?>" class="drawer-content__link">制作実績</a></div>
            <div class="drawer-content__item"><a href="<?php echo home_url('/contact') ?>" class="drawer-content__link">お問い合わせ</a></div>
        </div>
        <!-- ./drawer-content__items -->
    </div>
    <div class="drawer-background"></div>
    <!-- /drawer -->