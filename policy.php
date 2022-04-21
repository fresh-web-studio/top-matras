<?php
/*
Template Name: policy-template
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
        <?php the_content() ?>
    </div>
</main>

<?php
get_footer();
?>