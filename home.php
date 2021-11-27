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
        <div class="slider-item">
            <div class="slider-content">
                <div class="slider-title"> Гарантия здорового сна - 10 лет!</div>
                <div class="slider-description">Легендарные инновационные материалы в матрасах серии люкс</div>
                <button class="slider-button">Купить матрас</button>
            </div>
        </div>
        <div class="slider-item">
            <div class="slider-content">
                <div class="slider-title"> Гарантия здорового сна - 10 лет!</div>
                <div class="slider-description">Легендарные инновационные материалы в матрасах серии люкс</div>
                <button class="slider-button">Купить матрас</button>
            </div>
        </div>
        <div class="slider-item">
            <div class="slider-content">
                <div class="slider-title"> Гарантия здорового сна - 10 лет!</div>
                <div class="slider-description">Легендарные инновационные материалы в матрасах серии люкс</div>
                <button class="slider-button">Купить матрас</button>
            </div>
        </div>
    </section>
    <div class="flex-container">
        <a href="#" class="left-item image-link categories-item">
            <div class="item-content">
                <div class="item-discount">15% Скидка</div>
                <div class="item-title">Матрасы</div>
            </div>
            <div class="item-decoration-button"><span>Shop now</span><i class="fa fa-angle-right"></i></div>
        </a>
        <div class="right-item_box half-1">
            <a href="#" class="right-item-1 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">до 30% Скидка</div>
                    <div class="item-title">Топперы</div>
                </div>
                <div class="item-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
            </a>
            <a href="#" class="right-item-2 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">15% Скидка</div>
                    <div class="item-title">Боксы кровати</div>
                </div>
                <div class="item-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
            </a>
        </div>
        <div class="right-item_box half-2">
            <a href="#" class="right-item-3 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">до 30% Скидка</div>
                    <div class="item-title">Ортопедическое <br>
                        основание </div>
                </div>
                <div class="item-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
            </a>
            <a href="#" class="right-item-4 image-link categories-item">
                <div class="item-content">
                    <div class="item-discount">15% Скидка</div>
                    <div class="item-title">Постельное белье</div>
                </div>
                <div class="item-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
            </a>
        </div>
    </div>
    <h1 class="second-slider-name">Считайте звезды, а не овец</h1>
    <div class="second-slider">
        <div class="background"></div>
        <section class="first-regular slider">
            <div class="reviews">
                <div class="stars">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Star1.svg" alt=""></li>
                    </ul>
                </div>
                <div class="review-text">
                    “Это правда, оригинальный матрас “Мануфактура сна” - отличное соотношение цены и качества.
                    Благодаря
                    технологии охлаждения я чувствую себя комфортно всю ночь”
                </div>
                <div class="reviews-tag">
                    <img class="tag-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.svg" alt="">
                    <div class="tag-name-city">
                        <div class="tag-name">Катя</div>
                        <div class="tag-city">Владивосток</div>
                    </div>
                </div>
                <button class="reviews-button">Все отзывы</button>
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
                    “Это правда, оригинальный матрас “Мануфактура сна” - отличное соотношение цены и качества.
                    Благодаря
                    технологии охлаждения я чувствую себя комфортно всю ночь”
                </div>
                <div class="reviews-tag">
                    <img class="tag-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.svg" alt="">
                    <div class="tag-name-city">
                        <div class="tag-name">Катя</div>
                        <div class="tag-city">Владивосток</div>
                    </div>
                </div>
                <button class="reviews-button">Все отзывы</button>
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
                    “Это правда, оригинальный матрас “Мануфактура сна” - отличное соотношение цены и качества.
                    Благодаря
                    технологии охлаждения я чувствую себя комфортно всю ночь”
                </div>
                <div class="reviews-tag">
                    <img class="tag-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.svg" alt="">
                    <div class="tag-name-city">
                        <div class="tag-name">Катя</div>
                        <div class="tag-city">Владивосток</div>
                    </div>
                </div>
                <button class="reviews-button">Все отзывы</button>
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
                    “Это правда, оригинальный матрас “Мануфактура сна” - отличное соотношение цены и качества.
                    Благодаря
                    технологии охлаждения я чувствую себя комфортно всю ночь”
                </div>
                <div class="reviews-tag">
                    <img class="tag-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.svg" alt="">
                    <div class="tag-name-city">
                        <div class="tag-name">Катя</div>
                        <div class="tag-city">Владивосток</div>
                    </div>
                </div>
                <button class="reviews-button">Все отзывы</button>
            </div>
        </section>
        <section class="second-regular slider">
            <div class="second-reviews">
                <a href="#" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.004<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 р.</span>
                            <span class="price-mobile">18 395
                                    р.</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.004
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 р.</span> <span class="price">18 395
                            р.</span>
                </div>
            </div>
            <div class="second-reviews">
                <a href="#" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.004<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 р.</span>
                            <span class="price-mobile">18 395
                                    р.</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.004
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 р.</span> <span class="price">18 395
                            р.</span>
                </div>

            </div>
            <div class="second-reviews">
                <a href="#" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.004<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 р.</span>
                            <span class="price-mobile">18 395
                                    р.</span>
                        </div>
                    </div>
                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.004
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 р.</span> <span class="price">18 395
                            р.</span>
                </div>
            </div>
            <div class="second-reviews">
                <a href="#" class="reviews-image">
                    <div class="reviews-image-content">
                        до 30% Скидка
                    </div>
                    <div class="reviews-decoration-button">Shop now <i class="fa fa-angle-right"></i></div>
                    <div class="mobile-decoration-button">
                        <div class="second-reviews-name-mobile">
                            Sweet Sleep art.004<i class="fa fa-angle-right"></i>
                        </div>
                        <div class="purchase-mobile">Цена: <span class="discount-price-mobile">18 395 р.</span>
                            <span class="price-mobile">18 395
                                    р.</span>
                        </div>
                    </div>

                </a>
                <div class="second-reviews-name">
                    Sweet Sleep art.004
                </div>
                <div class="purchase">Цена: <span class="discount-price">18 395 р.</span> <span class="price">18 395
                            р.</span>
                </div>
            </div>
        </section>
    </div>
    <h1 class="slider-сarousel_name">Построй свою спальню</h1>
    <section class="slider-сarousel">

        <div class="slider-carousel_items item-1">
            <a class="image image-item-1">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-1 one-active"></button>
                <button class="color two-item-1"></button>
                <button class="color three-item-1"></button>
            </div>
        </div>
        <div class="slider-carousel_items item-2">
            <a class="image image-item-2">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-2 one-active"></button>
                <button class="color two-item-2"></button>
                <button class="color three-item-2"></button>
            </div>
        </div>
        <div class="slider-carousel_items item-3">
            <a class="image image-item-3">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-3 one-active"></button>
                <button class="color two-item-3"></button>
                <button class="color three-item-3"></button>
            </div>
        </div>
        <div class="slider-carousel_items item-4">
            <a class="image image-item-4">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-4 one-active"></button>
                <button class="color two-item-4"></button>
                <button class="color three-item-4"></button>
            </div>
        </div>
        <div class="slider-carousel_items item-5">
            <a class="image image-item-5">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-5 one-active"></button>
                <button class="color two-item-5"></button>
                <button class="color three-item-5"></button>
            </div>
        </div>
        <div class="slider-carousel_items item-6">
            <a class="image image-item-6">
                <div class="decoration-button">Быстрый просмотр</div>
            </a>
            <div class="name">Самая лучшая наволочка</div>
            <div class="price">Цена: <span>18 395 р.</span></div>
            <div class="select">
                <button class="color one-item-6 one-active" checked=""></button>
                <button class="color two-item-6" checked=""></button>
                <button class="color three-item-6" checked=""></button>
            </div>
        </div>
    </section>
    <div class="banner-container">
        <div class="banner-content">
            <div class="banner-text">Качество проверенное временем!</div>
        </div>
    </div>
    <div class="advantages-container">
        <div class="advantages-items">
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages1.svg">
                <div class="advantages-title">Поболтай с нами</div>
                <div class="advantages-description">Пиши! Наша служба поддержки всегда на связи в чате и готова помочь.
                    Спрашивай!</div>
            </div>
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages2.svg">
                <div class="advantages-title">Гарантия качества</div>
                <div class="advantages-description">Оцени качество наших матрасов. У нас самая требовательная оценка
                    качества. </div>
            </div>
            <div class="advantages-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages3.svg">
                <div class="advantages-title">Позвони нам</div>
                <div class="advantages-description">Наши специалисты по сну готовы подобрать вам матрас Вашей мечты.
                    Уточняй у нас все вопросы</div>
            </div>
        </div>
    </div>
    <div class="video-container">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/images/video.mp4" autoplay="autoplay" muted poster="<?php echo get_template_directory_uri(); ?>/assets/images/video.png" controls="controls"></video>
    </div>
    <div class="ready-container">
        <div class="ready-content">
            <div class="ready-text">Вы готовы ко сну?</div>
            <div class="ready-button">
                <a href="#" class="ready-button button">Купить матрас</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();