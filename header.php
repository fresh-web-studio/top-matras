<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package top-matras.shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/523b48a842.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'top-matras-shop' ); ?></a>

    <header class="header">
        <div class="header-wrapper">
            <div class="header-logo_burger">
                <a href="#menu" id="mmenu-icon" class="hamburger hamburger--spin">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-menu__burger.svg" alt="Бургер">
                </a>
                <nav id="menu">
                    <ul>
                        <li><span>Матрасы</span>
                            <ul>
                                <li><a href="/about/history">Беспружинные матрасы <div class="discount-menu"><span>15%
                                                OFF</span></div></a></li>
                                <li><a href="/about/history">Зависимые матрасы <div class="discount-menu"><span>15%
                                                OFF</span></div></a></li>
                                <li><a href="/about/history">Пружинные матрасы <div class="discount-menu"><span>15%
                                                OFF</span></div></a></li>
                                <a href="#" class="menu-link-button">Посмотреть все матрасы</a>
                                <div class="menu-image-title">Оригинальный матрас</div>
                                <a class="menu-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/000.jpg" alt=""></a>
                            </ul>
                        </li>
                        <li><span>Топперы</span></li>
                        <li><span>Боксы кровати</span></li>
                        <li><span>Ортопедические основания</span></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </nav>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
                </a>
            </div>
            <div class="border-divider"></div>
            <nav class="header_main-nav">

                <?php wp_nav_menu( [
                    'theme_location'  => 'menu-1',
                    'container'       => null,
                    'menu_class'      => 'nav-menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] );
                ?>
            </nav>
            <!---<script src="js/header_main-menu.js"></script>
                Изменение цвета меню--->
            <div class="header-right">
                <a href="#" class="map">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" alt="">
                    <div class="map-name">Москва</div>
                </a>
                <a class="shopping-cart" href="http://localhost:8888/top-matras.shop/cart/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="">
                </a>
            </div>
        </div>
    </header>

