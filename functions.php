<?php

/**
 * top-matras.shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package top-matras.shop
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('top_matras_shop_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function top_matras_shop_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on top-matras.shop, use a find and replace
         * to change 'top-matras-shop' to the name of your theme in all the template files.
         */
        load_theme_textdomain('top-matras-shop', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'Основное меню'),
                'menu-2' => esc_html__('Secondary', 'Левое меню'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'top_matras_shop_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;

add_action('after_setup_theme', 'top_matras_shop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function top_matras_shop_content_width()
{
    $GLOBALS['content_width'] = apply_filters('top_matras_shop_content_width', 640);
}
add_action('after_setup_theme', 'top_matras_shop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function top_matras_shop_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'top-matras-shop'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'top-matras-shop'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'top_matras_shop_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function top_matras_shop_scripts()
{
    wp_enqueue_style('mmenu-css', get_template_directory_uri() . '/assets/css/mmenu.css', array(), _S_VERSION);
    wp_enqueue_style('hamburgers-css', get_template_directory_uri() . '/assets/css/hamburgers.css', array(), _S_VERSION);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style-html.css', array(), _S_VERSION);
    /*    wp_enqueue_style( 'old-style-css', get_template_directory_uri() . '/assets/css/old/style.css', array(), _S_VERSION );*/
    wp_enqueue_style('woodcommerce', get_template_directory_uri() . '/assets/css/woodcommerce.css', array(), _S_VERSION);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), _S_VERSION);
    wp_enqueue_style('top-matras-shop-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('top-matras-shop-style', 'rtl', 'replace');

    wp_enqueue_script('top-matras-shop-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
    //wp_enqueue_script( 'jquery-22', get_template_directory_uri() . '/assets/js/jquery-2.2.0.min.js', array(), _S_VERSION, true );
    //wp_enqueue_script( 'top-matras-shop-jquery-3.6', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), _S_VERSION, true );
    wp_enqueue_script('mmenu-js', get_template_directory_uri() . '/assets/js/mmenu.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('slick-settings-js', get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true);
    wp_enqueue_script('slick3-settings-js', get_template_directory_uri() . '/assets/js/slick3.js', array(), _S_VERSION, true);
    wp_enqueue_script('second-page-settings-js', get_template_directory_uri() . '/assets/js/second-page-reviews.js', array(), _S_VERSION, true);
    wp_enqueue_script('all-settings-js', get_template_directory_uri() . '/assets/js/all-settings.js', array(), _S_VERSION, true);
/*    wp_enqueue_script('litezoom-js', get_template_directory_uri() . '/assets/js/litezoom.min.js', array(), _S_VERSION, true);*/

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'top_matras_shop_scripts');


//Добавление своих типов записей (слайдера)
add_action('init', function () {
    $labels = array(
        'name' => 'Главный слайдер',
        'singular_name' => 'Слайд',
        'add_new' => 'Добавить слайд',
        'add_new_item' => 'Добавить новый слайд',
        'edit_item' => 'Редактировать слайд',
        'new_item' => 'Новый слайд',
        'all_items' => 'Все слайды',
        'view_item' => 'Посмотреть слайдер на сайте',
        'search_items' => 'Искать слайды',
        'not_found' =>  'Слайд не найден!',
        'not_found_in_trash' => 'В корзине нет слайда',
        'menu_name' => 'Главный слайдер'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать в админке
        'menu_icon' => 'dashicons-slides',
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('main_slider', $args);
});

/**
 * Произвольное изображение
 * add_image_size( 'top_matras_shop_menu_preview', 317, 206 );
 */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/assets/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/assets/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/assets/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/assets/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/assets/inc/jetpack.php';
}


/**
 * Хлебные крошки
 **/

/**
 * Woocommerce
 **/

// Woocommerce support
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    function mytheme_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
} else {
    echo 'WooCommerce is not Active.';
}
//Rename
add_filter('woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text');
function custom_woocommerce_product_add_to_cart_text()
{
    global $product;
    $product_type = $product->product_type;
    switch ($product_type) {
        case 'variable':
            return __('Подробнее...', 'woocommerce');
            break;
    }
}

/**
 * Change the breadcrumb separator
 */
add_filter('woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter');
function wcc_change_breadcrumb_delimiter($defaults)
{
    // Change the breadcrumb delimeter from '/' to '>'
    $defaults['delimiter'] = ' &#8250; ';
    return $defaults;
}
add_filter('woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter', 20);

//Remove sidebar woocommerce
add_action('woocommerce_before_main_content', 'remove_sidebar');
function remove_sidebar()
{
    if (is_woocommerce()) {
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

//Remove link
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15);

//Remove link
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

//Hover cart
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 15);

//Remove rating
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 3);

//Remove short_description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

//Remove short_meta
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

//Remove price
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

//Remove variations
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 3);

//Remove ujQery Migrate
/*add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( $scripts ) {

    if ( empty( $scripts->registered['jquery'] ) || is_admin() ) {
        return;
    }

    $deps = & $scripts->registered['jquery']->deps;

    $deps = array_diff( $deps, [ 'jquery-migrate' ] );
}*/

//Remove related products
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

//Добавление скидки в процентах

add_filter('woocommerce_format_sale_price', 'truemisha_discount_percentage', 10, 3);

function truemisha_discount_percentage($price, $regular_price, $sale_price)
{

    if ($regular_price > 0 && $sale_price > 0) {
        $percentage = round(((int)$regular_price - (int)$sale_price) / (int)$regular_price * 100) . '%';

        // сообщение об экономии, можете стилизовать его при помощи CSS
        $percentage_message = '<span class="product-discount-percent">-' . $percentage . ' Скидка</span>';

        // отображение цены в новом формате
        $price = '<del>' . wc_price($regular_price) . '</del> <ins>' . wc_price($sale_price) . '</ins> <span>' . $percentage_message . '</span>';

        // возвращаем результат
        return $price;
    }
}

//Изменение порядка вывода полей в оформлении заказа woocommerce

function sort_fields_billing($fields) {

	$fields["billing"]["billing_first_name"]["priority"] = 2;
	$fields["billing"]["billing_last_name"]["priority"] = 3;
	$fields["billing"]["billing_company"]["priority"] = 4;
	$fields["billing"]["billing_address_1"]["priority"] = 8;
	$fields["billing"]["billing_city"]["priority"] = 7;
	$fields["billing"]["billing_postcode"]["priority"] = 8;
	$fields["billing"]["billing_country"]["priority"] = 5;
	$fields["billing"]["billing_state"]["priority"] = 6;
	$fields["billing"]["billing_email"]["priority"] = 1;
	$fields["billing"]["billing_phone"]["priority"] = 10;
	
	return $fields;
	
}

add_filter("woocommerce_checkout_fields", "sort_fields_billing");

//Rename Sale
add_filter('woocommerce_sale_flash', 'my_custom_sale_flash', 10, 3);
function my_custom_sale_flash($text, $post, $_product) {
    return '
<span class="onsale"> Акция! </span>
';
}