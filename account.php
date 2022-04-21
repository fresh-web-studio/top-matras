<?php
/*
Template Name: account-template
Template Post Type: post, page
*/
?>

<!-- Здесь html/php код шаблона -->
<?php
get_header();
?>

<main id="main" class="site-main" role="main">
    <?php
    $args = array();

    woocommerce_breadcrumb($args);
    ?>
    <div class="container">
        <h1 class="entry-title"><?php the_title() ?></h1>
        <?php echo do_shortcode('[woocommerce_my_account]'); ?>
    </div>
</main>

<?php
get_footer();
?>