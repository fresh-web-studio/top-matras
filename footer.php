<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package top-matras.shop
 */

?>

	<footer id="colophon" class="site-footer">
        <! -- html -->
        <div class="footer__main">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__column">
                        <div class="footer__column-header">Категории</div>
                        <ul class="footer__menu">
                            <li><a class="footer__menu-link selected" href="#">
                                    Матрасы</a></li>
                            <li><a class="footer__menu-link" href="#">
                                    Топеры</a></li>
                            <li><a class="footer__menu-link" href="#">
                                    Боксы кровати</a></li>
                            <li><a class="footer__menu-link" href="#">
                                    Ортопедически основания</a></li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <div class="footer__column-header">Ресурсы</div>
                        <ul class="footer__menu">
                            <li><a class="footer__menu-link selected" href="#">
                                    О компании</a></li>
                            <li><a class="footer__menu-link" href="#">
                                    Доставка и оплата</a></li>
                            <li><a class="footer__menu-link" href="#">
                                    Контакты</a></li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <div class="footer__column-header"></div>
                        <div class="footer__link"></div>
                    </div>
                    <div class="footer__column">
                        <div class="footer__column-header">Контакты</div>
                        <div class="footer__social">
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/icon__whatsapp.svg" alt="Иконка Whatsapp"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/icon__whatsapp-active.svg" alt="Иконка Whatsapp"/>
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/facebook.svg" alt="Иконка Facebook"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/facebook-active.svg" alt="Иконка Facebook"/>
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/twitter.svg" alt="Иконка Twitter"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/twitter-active.svg" alt="Иконка Twitter"/>
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/icon__you.svg" alt="Иконка Youtube"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/icon__you-active.svg" alt="Иконка Youtube"/>
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/icon__inst.svg" alt="Иконка Instagram"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/icon__inst-active.svg" alt="Иконка Instagram"/>
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="wp-content/themes/top-matras-shop/assets/images/icon__vk.svg" alt="Иконка ВК"/>
                                <img class="second" src="wp-content/themes/top-matras-shop/assets/images/icon__vk-active.svg" alt="Иконка ВК"/>
                            </a>
                        </div>
                        <div class="footer__menu-link">
                            <a href="tel:+79636998650" class="footer__tel">+7 963 699-86-50</a>
                        </div>
                        <div class="footer__menu-link">
                            <a href="mailto:info@top-matras.shop" class="footer__mail">info@top-matras.shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="footer__row-copyright">
                    <i class="fa fa-copyright"></i>
                    <div class="year">2021</div>
                    <a href="#" class="policy">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
        <! -- /html -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
