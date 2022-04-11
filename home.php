<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package top-matras.shop
 */

get_header();
?>
<div class="main">

    <section class="main-slider slider">
        <?php $my_posts = get_posts(array(
            'numberposts' => 3,
            'post_type'   => 'main_slider',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        foreach ($my_posts as $post) {
            setup_postdata($post);
        ?>
            <a href="<?php the_field('main-slider_link'); ?>" class="slider-item" style="background-image: url('<?php
                                                                                                                the_post_thumbnail_url('full');
                                                                                                                ?>');">
                <div class="slider-content">
                    <div class="slider-title"><?php the_field('main-slider_title') ?></div>
                    <div class="slider-description"><?php the_content() ?></div>
                </div>
            </a>

        <?php
        }

        wp_reset_postdata(); // сброс
        ?>
    </section>
    <div class="flex-container">
        <a href="http://top-matras.shop/product-category/matrasy/" class="left-item image-link categories-item">
            <div class="item-content">
                <div class="item-discount">15% Скидка</div>
                <div class="item-title">Матрасы</div>
            </div>
            <div class="item-decoration-button"><span>Купить</span><i class="fa fa-angle-right"></i></div>
        </a>
        <div class="right-item_box half-1">
            <a href="http://top-matras.shop/product-category/namatrasniki/" class="right-item-1 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">до 30% Скидка</div>
                    <div class="item-title">Наматрасники</div>
                </div>
                <div class="item-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
            </a>
            <a href="http://top-matras.shop/product-category/boksy-krovati/" class="right-item-2 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">15% Скидка</div>
                    <div class="item-title">Боксы кровати</div>
                </div>
                <div class="item-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
            </a>
        </div>
        <div class="right-item_box half-2">
            <a href="http://top-matras.shop/product-category/ortopedicheskie-osnovaniya/" class="right-item-3 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">до 30% Скидка</div>
                    <div class="item-title">Ортопедическое <br>
                        основание </div>
                </div>
                <div class="item-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
            </a>
            <a href="http://top-matras.shop/product-category/postelnoe-belyo/" class="right-item-4 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">15% Скидка</div>
                    <div class="item-title">Постельное белье</div>
                </div>
                <div class="item-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
            </a>
        </div>
    </div>
    <h1 class="second-slider-name">Считайте звезды, а не овец</h1>
    <div class="second-slider">
        <div class="background"></div>
        <div class="first-regular slider">
            <!--<ul id="customers-testimonials">
                <?php foreach (get_comments() as $comment) : ?>
                    <li class="reviews">
                        <div class="comment-inner">
                            <div class="review-text">
                                "<?php //echo $comment->comment_content; ?>"
                            </div>
                            <div class="reviews-tag">
                                <div class="tag-name-city">
                                    <div class="tag-name">
                                        <?php //echo $comment->comment_author; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>-->
            <div class="reviews">
                <div class="stars">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt="">
                        </li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                    </ul>
                </div>
                <div class="review-text">
                    “Решил заказать матрасы в детскую на сайте компании Мануфактура сна. И сервис огонь, и доставка экспресс и товар крут. Ассортимент на любой кошелек, но линейка матрасов подороже по какой-то, супер технологии сделана.”
                </div>
                <div class="reviews-tag">
                    <div class="tag-name-city">
                        <div class="tag-name">Виталий Эстин</div>
                        <div class="tag-city">Казань</div>
                    </div>
                </div>
                <div class="reviews-button"><a href="reviews-page.html">Все отзывы</a></div>
            </div>
            <div class="reviews">
                <div class="stars">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt="">
                        </li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                    </ul>
                </div>
                <div class="review-text">
                    “Спасибо компании Мануфактура сна за отличный матрас. Заказала через сайт, менеджер по телефону связался, задал уточняющие вопросы и стало понятно, что мне больше подойдет немного другой матрас. Удобная оплата, доставили очень быстро.”
                </div>
                <div class="reviews-tag">
                    <div class="tag-name-city">
                        <div class="tag-name">Альфия</div>
                        <div class="tag-city">Самара</div>
                    </div>
                </div>
                <div class="reviews-button"><a href="reviews-page.html">Все отзывы</a></div>
            </div>
            <div class="reviews">
                <div class="stars">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt="">
                        </li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                    </ul>
                </div>
                <div class="review-text">
                    “Заказал матрас на сайте, оказалось ребята сами производители, поэтому и цена очень приятная. Выбрал доставку ТК. Матрас был у меня через три дня после заказа. Уже обновил его, поэтому смело рекомендую! Качество отличное”
                </div>
                <div class="reviews-tag">
                    <div class="tag-name-city">
                        <div class="tag-name">Алексей Иванов</div>
                        <div class="tag-city">Москва</div>
                    </div>
                </div>
                <div class="reviews-button"><a href="reviews-page.html">Все отзывы</a></div>
            </div>
        </div>
        <div class="second-regular slider">
            <div class="second-reviews">
                <a href="product-page.html" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.96 5<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 &#8381;</span>
                            <span class="price-mobile">18 395
                                &#8381;</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.96 5
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 &#8381;</span> <span class="price">18 395
                        &#8381;</span>
                </div>
            </div>
            <div class="second-reviews">
                <a href="product-page.html" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.96 4<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 &#8381;</span>
                            <span class="price-mobile">18 395
                                &#8381;</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.96 4
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 &#8381;</span> <span class="price">18 395
                        &#8381;</span>
                </div>

            </div>
            <div class="second-reviews">
                <a href="product-page.html" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Купить<i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.004<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">3 497 &#8381;</span>
                            <span class="price-mobile">4 995
                                &#8381;</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.004
                </div>
                <div class="purchase">Цена: <span class="discount-price">3 497 &#8381;</span> <span class="price">4 995
                        &#8381;</span>
                </div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[woo_product_slider id="170"]'); ?>

    <div class="banner-container">
        <div class="banner-content">
            <div class="banner-text">Качество проверенное временем!</div>
        </div>
    </div>
    <div class="advantages-container">
        <div class="advantages-items">
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages1.svg" alt="Преимущества">
                <div class="advantages-title">Поболтай с нами</div>
                <div class="advantages-description">Пиши! Наша служба поддержки всегда на связи в чате и готова
                    помочь.
                    Спрашивай!</div>
            </div>
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages2.svg" alt="Преимущества">
                <div class="advantages-title">Гарантия качества</div>
                <div class="advantages-description">Оцени качество наших матрасов. У нас самая требовательная оценка
                    качества. </div>
            </div>
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages3.svg" alt="Преимущества">
                <div class="advantages-title">Позвони нам</div>
                <div class="advantages-description">Наши специалисты по сну готовы подобрать вам матрас Вашей мечты.
                    Уточняй у нас все вопросы</div>
            </div>
        </div>
    </div>
    <div class="product-page-reviews">
        <div class="product-page-reviews-container">
            <h1 class="product-page-reviews_title">Посмотрите почему люди любят наши матрасы</h1>
            <!--<div class="filter-reviews">
                <div class="filter-reviews_title">Фильтр отзывов:</div>
                <ul id="myTab" class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description">Комфорт</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#characteristics">Боль в спине</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#сouples">Пары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#transition">Переход на Манафактуру сна</a>
                    </li>
                </ul>
                <ul class="nav nav-pills" id="myTab-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Фильтр отзывов:</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#description">Комфорт</a></li>
                            <li><a class="dropdown-item" href="#characteristics">Боль в спине</a></li>
                            <li><a class="dropdown-item" href="#сouples">Пары</a></li>
                            <li><a class="dropdown-item" href="#transition">Переход на Манафактуру сна</a></li>
                        </ul>
                    </li>
                </ul>
            </div>-->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="description">
                    <div class="reviews-items slider">
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Снежанна</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="reviews-page.html" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Анна Петрова</div>
                                            <div class="city">Москва</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Менеджер грамотно и быстро сориентировал по заказу и всем моментам. Матрас через три дня уже был у меня дома. Оплатила курьеру при доставке. На матрас действует гарантия 5 лет. Думаю прослужит еще дольше.</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Маргарита Сканди</div>
                                            <div class="city">Нальчик</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Спасибо за отличный матрас. Хороший выбор на сайте и при этом все четко и понятно. Матрас высокий, ткань приятная. Очень стильно смотрится.</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Виталий Эстин</div>
                                            <div class="city">Казань</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Решил заказать матрасы в детскую на сайте компании Мануфактура сна. Спасибо! И сервис огонь, и доставка экспресс и товар крут. Ассортимент на любой кошелек, но линейка матрасов подороже по какой-то, супер технологии сделана. Такие матрасы обычно сумасшедших денег стоят в магазинах, а здесь можно по адекватным ценам купить.</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Альфия</div>
                                            <div class="city">Самара</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Спасибо компании Мануфактура сна за отличный матрас. Заказала через сайт, менеджер по телефону связался, задал уточняющие вопросы и стало понятно, что мне больше подойдет немного другой матрас. Удобная оплата на сайте, доставили очень быстро. </div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Алексей Иванов</div>
                                            <div class="city">Москва</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Заказал матрас на сайте, оказалось ребята сами производители, поэтому и цена очень приятная. Выбрал доставку ТК. Матрас был у меня через три дня после заказа. Уже обновил его, поэтому смело рекомендую! Качество отличное</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="characteristics">
                    <div class="reviews-items slider second-page-reviews-slider">
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...
                                        </div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Ваня</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="сouples">
                    <div class="reviews-items slider second-page-reviews-slider">
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Рома</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="transition">
                    <div class="reviews-items slider">
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="reviews-item">
                                <div class="reviews-item_content">
                                    <div class="product-page-reviews_tag">
                                        <div class="tag-name-city">
                                            <div class="name">Давид</div>
                                            <div class="city">Екатеринбург</div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star3.svg" alt=""></li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star4.svg" alt=""></li>
                                    </ul>
                                    <div class="product-page-reviews_content">
                                        <div class="reviews-item_title">Идеально подходит для легкого сна</div>
                                        <div class="product-page-reviews_text">Мне было трудно спать, и я перебрала
                                            несколько
                                            матрасов, прежде чем наконец опробовать “Мануфактуру сна”. Это абсолютно
                                            меняет
                                            жизнь!
                                            Теперь мне нужно бороться с собакой за место в постели и ...</div>
                                    </div>
                                    <a href="#" class="read-more">Читать полностью...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a href="reviews-page.html" class="read-all_reviews">Читать все отзывы</a>
        </div>
    </div>
    <div class="video-container">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/video.mp4" muted poster="<?php echo get_template_directory_uri(); ?>/assets/images/video.jpeg" controls="controls"></video>
    </div>
    <div class="ready-container">
        <div class="ready-content">
            <div class="ready-text">Вы готовы ко сну?</div>
            <div class="ready-button">
                <a href="categories-page.html" class="ready-button button">Купить матрас</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
