<?php
/*
Template Name: reviews-template
Template Post Type: post, page
*/
?>

<!-- Здесь html/php код шаблона -->
<?php
get_header();
?>

<div class="reviewsWrapper">
    <div class="reviews-title">Отзывы</div>
    <div class="reviews-container">
        <?php echo do_shortcode('[twb_wc_reviews]') ?>
    </div>
</div>

<?php
get_footer();
?>