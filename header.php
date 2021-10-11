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
                <nav class="burger-menu">
                    <div class="input">
                        <input id="menu-toggle" type="checkbox" />
                        <label class="menu-btn" for="menu-toggle">
                            <span></span>
                        </label>

                        <?php wp_nav_menu( [
                            'theme_location'  => 'menu-2',
                            'container'       => null,
                            'menu_class'      => 'menubox',
                            'menu_id'         => '',
                            'echo'            => true,
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ] );
                        ?>
                    </div>

                </nav>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="">
                </a>
            </div>
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
                <a class="shopping-cart" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="">
                </a>
            </div>
        </div>
    </header>

