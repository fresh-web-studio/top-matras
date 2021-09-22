<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package top-matras.shop
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Извините, страница не найдена.', 'top-matras-shop' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Возможно такой странице никогда не было или она удалена. Воспользуйтесь поиском?', 'top-matras-shop' ); ?></p>
                <p>
                    <?php
                    get_search_form();

                    ?>
                </p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
