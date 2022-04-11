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
                            <li><a class="footer__menu-link" href="http://top-matras.shop/product-category/namatrasniki/">
                                    Наматрасники</a></li>
                            <li><a class="footer__menu-link" href="http://top-matras.shop/product-category/boksy-krovati/">
                                    Боксы кровати</a></li>
                            <li><a class="footer__menu-link" href="http://top-matras.shop/product-category/ortopedicheskie-osnovaniya/">
                                    Ортопедические основания</a></li>
                            <li><a class="footer__menu-link" href="http://top-matras.shop/product-category/postelnoe-belyo/">
                                    Постельное бельё</a></li>
                        </ul>
                    </div>
                    <div class="footer__column">
                        <div class="footer__column-header">Ресурсы</div>
                        <ul class="footer__menu">
                            <li><a class="footer__menu-link selected" href="http://top-matras.shop/about/">
                                    О компании</a></li>
                            <li><a class="footer__menu-link" href="http://top-matras.shop/dostavka-i-oplata/">
                                    Доставка и оплата</a></li>
                            <li><a class="footer__menu-link" href="http://top-matras.shop/kontakty/">
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
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__whatsapp.svg" alt="Иконка Whatsapp" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__whatsapp-active.svg" alt="Иконка Whatsapp" />
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Иконка Facebook" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-active.svg" alt="Иконка Facebook" />
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Иконка Twitter" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-active.svg" alt="Иконка Twitter" />
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__you.svg" alt="Иконка Youtube" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__you-active.svg" alt="Иконка Youtube" />
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__inst.svg" alt="Иконка Instagram" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__inst-active.svg" alt="Иконка Instagram" />
                            </a>
                            <a href="#" target="_blank" class="hover">
                                <img class="first" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__vk.svg" alt="Иконка ВК" />
                                <img class="second" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon__vk-active.svg" alt="Иконка ВК" />
                            </a>
                        </div>
                        <div class="footer__menu-link">
                            <?php echo do_shortcode('[wt_geotargeting type="phone" city_show="Москва"]<a href="tel:+79636998650" class="footer__tel">+7 963 699-86-50</a>[/wt_geotargeting]'); ?>
                            <?php echo do_shortcode('[wt_geotargeting type="phone" default="true"]<a href="tel:+79636998650" class="footer__tel">+7 963 699-86-50</a>[/wt_geotargeting]'); ?>
                        </div>
                        <div class="footer__menu-link">
                            <?php echo do_shortcode('[wt_geotargeting type="mail" city_show="Москва"]<a href="mailto:sale@top-matras.shop" class="footer__mail">info@top-matras.shop</a>[/wt_geotargeting]'); ?>
                            <?php echo do_shortcode('[wt_geotargeting type="mail" default="true"]<a href="mailto:sale@top-matras.shop" class="footer__mail">info@top-matras.shop</a>[/wt_geotargeting]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="footer__row-copyright">
                    <i class="fa fa-copyright"></i>
                    <div class="year">2022</div>
                    <a href="#" class="policy">Политика конфиденциальности</a>
                </div>
            </div>
        </div>

        <! -- /html -->

</footer><!-- #colophon -->
<div id="modal" class="modal-city">
    <div>
        <div class="text">
            <div class="city">
                <div class="city-title">Укажите свой город:</div>
                <div class="city-list">
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Москва">Москва</a>
                    <a href="/?wt_city_by_default=Тольятти">Тольятти</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>
                    <a href="/?wt_city_by_default=Владивосток">Владивосток</a>

                </div>
                <a class="geo-clean" href="/?wt_geo_clean=1">Отменить выбор</a>
            </div>
        </div>
        <a href="#close" title="Закрыть">Закрыть</a>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    jQuery.noConflict()('#myTab a').click(function(e) {
        e.preventDefault();
        jQuery.noConflict()(this).tab('show');
    })
    jQuery.noConflict()('#myTab-2 a').click(function(e) {
        e.preventDefault();
        jQuery.noConflict()(this).tab('show');
    })
</script>
<script>
    const discountMenu1 = document.createElement("div");

    // Добавляем к div класс black
    discountMenu1.classList.add('discount-menu');

    // Добавляем в конец body тег div
    document.getElementById("mega-menu-item-55").append(discountMenu1);

    // Вставка текста в тег div
    discountMenu1.innerHTML = "<span>15% OFF</span>";
</script>
<script>
    const discountMenu2 = document.createElement("div");

    discountMenu2.classList.add('discount-menu');

    document.getElementById("mega-menu-item-56").append(discountMenu2);

    discountMenu2.innerHTML = "<span>10% OFF</span>";
</script>
<script>
    const discountMenu3 = document.createElement("div");

    discountMenu3.classList.add('discount-menu');

    document.getElementById("mega-menu-item-53").append(discountMenu3);

    discountMenu3.innerHTML = "<span>20% OFF</span>";
</script>
<script>
    if (document.getElementById('billing_email')) {
        document.getElementById('billing_email').classList.add("form-control");
        document.getElementById('billing_first_name').classList.add("form-control");
        document.getElementById('billing_last_name').classList.add("form-control");
        document.getElementById('billing_company').classList.add("form-control");
        document.getElementById('billing_state').classList.add("form-control");
        document.getElementById('billing_city').classList.add("form-control");
        document.getElementById('billing_address_1').classList.add("form-control");
        document.getElementById('billing_postcode').classList.add("form-control");
        document.getElementById('billing_phone').classList.add("form-control");
    }
</script>
<script>
    if (document.getElementById('billing_email')) {
        const paymentColBack = document.createElement("div");

        paymentColBack.id = 'border-image_1';

        paymentColBack.classList.add('border-image');

        document.getElementById("order_review").after(paymentColBack);

        paymentColBack.innerHTML = "";
    }
</script>
<script>
    if (document.getElementById('billing_email')) {
        const paymentAdv = document.createElement("div");

        paymentAdv.classList.add('advantages-ordering');


        document.getElementById("border-image_1").after(paymentAdv);

        paymentAdv.innerHTML = "<div class='advantages-ordering_title'>Преимущества каждого матраса</div><div class='advantages-items'><div class='advantages-item'><img src='<?php echo get_template_directory_uri(); ?>/assets/images/advantages1.svg' alt='Преимущества'><div class='advantages-title'>Поболтай с нами</div></div><div class='advantages-item'><img src='<?php echo get_template_directory_uri(); ?>/assets/images/advantages2.svg' alt='Преимущества'><div class='advantages-title'>Гарантия качества</div></div><div class='advantages-item'><img src='<?php echo get_template_directory_uri(); ?>/assets/images/advantages3.svg' alt='Преимущества'><div class='advantages-title'>Позвони нам</div></div></div>";
    }
</script>

</body>

</html>