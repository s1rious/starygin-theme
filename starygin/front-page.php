<?php

/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starygin
 */

get_header();
?>
<div class="page__main-screen main-screen -active-menu-item" id="main">
    <div class="main-screen__wrap">
        <div class="main-screen__container -container">
            <div class="main-screen__row">
                <div class="main-screen__body">
                    <h2 class="main-screen__title">Продадим Вашу квартиру<br> за <span><span class="num">10</span>
                            дней</span> дороже рынка<br> на <span class="num">10%</span> или выкупим её сами</h2>
                    <ul class="main-screen__list">
                        <?php
                        if (have_rows('mainScreen__slogans')) :
                            while (have_rows('mainScreen__slogans')) : the_row(); ?>
                                <li><?php the_sub_field('mainscreen__slogan'); ?></li>
                        <?php endwhile;
                        endif;
                        ?>
                    </ul>
                    <div class="main-screen__footer">
                        <a href="#" class="main-screen__btn btn btn_white btn_main">Бесплатная консультация</a>
                        <div class="main-screen__watch watch-icon -link-watch">
                            <a href="" class="watch-icon__link"></a>
                            <div class="watch-icon__content">
                                <span class="watch-icon__icon -icon-play"></span>
                                <img src="http://localhost/wordpress/wp-content/uploads/2022/06/btn.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="main-screen__mouse">
                        <a href="#"><img src="http://localhost/wordpress/wp-content/uploads/2022/06/mouse.svg" alt="img"></a>
                    </div>
                </div>
                <div class="main-screen__images" data-me="767.98, .main-screen__body, 2">
                    <div class="main-screen__image" data-speed="1.5"><img src=<?php the_field('mainScreen__back'); ?> alt="img">
                    </div>
                    <div class="main-screen__image" data-speed="4"><img src=<?php the_field('mainScreen__pic'); ?> alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page__features features">
    <div class="features__container -container">
        <h2 class="features__title title title_center-m title_white"><?php the_field('features__title'); ?></h2>
        <div class="features__row" data-spollers="max, 991.98">
            <?php
            if (have_rows('feautures__tabs')) :
                while (have_rows('features__tabs')) : the_row(); ?>
                    <?php $i = get_row_index();  ?>
                    <?php
                    if (have_rows('featuresTab')) :
                        while (have_rows('featuresTab')) : the_row(); ?>
                            <div class="features__col item-features item-features_1">
                                <div class="item-features__header" data-spoller-item data-spoller-item-next><span class="item-features__arrow -icon-arrow-right-big"></span></div>
                                <div class="item-features__num" data-me="991.98, .item-features_1 .item-features__header, first"><?php echo 0 . $i ?></div>
                                <div class="item-features__main">
                                    <div class="item-features__content">
                                        <h3 class="item-features__title" data-me="991.98, .item-features_1 .item-features__header, 1">
                                            <?php the_sub_field('featuresTab__title'); ?>
                                        </h3>
                                        <div class="item-features__subcontent">
                                            <div class="item-features__label"><?php the_sub_field('featuresTab__label'); ?>
                                                договора:</div>
                                            <ul class="item-features__list">
                                                <?php
                                                if (have_rows('featuresTabList')) :
                                                    while (have_rows('featuresTabList')) : the_row(); ?>
                                                        <li><?php the_sub_field('featuresTabList__item'); ?></li>
                                                <?php endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                            <div class="item-features__label"><?php the_sub_field('featuresTab__last'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="page__bonuses bonuses">
    <div class="bonuses__container -container">
        <h2 class="bonuses__title title title_center title_black"><?php the_field('bonuses__title') ?></h2>
        <div class="bonuses__items">
            <div class="bonuses__row">
                <div class="bonuses__top">
                    <p><span><?php the_field('bonuses__first'); ?></span></p>
                </div>
            </div>
            <?php $bonuses_rows = get_field('bonuses__rows'); ?>
            <div class="bonuses__row">
                <div class="bonuses__text bonuses__text-1">
                    <p><span><?php echo $bonuses_rows[0]['bonuses__row'] ?></span></p>
                </div>
                <div class="bonuses__text bonuses__text-2">
                    <p><span><?php echo $bonuses_rows[1]['bonuses__row'] ?></span></p>
                </div>
            </div>
            <div class="bonuses__row">
                <div class="bonuses__text bonuses__text-3">
                    <p><span><?php echo $bonuses_rows[2]['bonuses__row'] ?></span></p>
                </div>
                <div class="bonuses__text bonuses__text-4">
                    <p><span><?php echo $bonuses_rows[3]['bonuses__row'] ?></span></p>
                </div>
            </div>
            <div class="bonuses__row">
                <div class="bonuses__text bonuses__text-5">
                    <p><span><?php echo $bonuses_rows[4]['bonuses__row'] ?></span></p>
                </div>
                <div class="bonuses__text bonuses__text-6">
                    <p><span><?php echo $bonuses_rows[5]['bonuses__row'] ?></span></p>
                </div>
            </div>
            <div class="bonuses__row">
                <div class="bonuses__text bonuses__text-7">
                    <p><span><?php echo $bonuses_rows[6]['bonuses__row'] ?></span></p>
                </div>
                <div class="bonuses__text bonuses__text-8">
                    <p><span><?php echo $bonuses_rows[7]['bonuses__row'] ?></span></p>
                </div>
            </div>
            <div class="bonuses__row">
                <div class="bonuses__text bonuses__text-9">
                    <p><span><?php echo $bonuses_rows[8]['bonuses__row'] ?></span></p>
                </div>
                <div class="bonuses__text bonuses__text-10">
                    <p><span><?php echo $bonuses_rows[9]['bonuses__row'] ?></span></p>
                </div>
            </div>
            <div class="bonuses__row">
                <div class="bonuses__footer">
                    <p><span><?php the_field('bonuses__last'); ?></span></p>
                </div>
            </div>
        </div>
        <div class="bonuses__images">
            <img src=<?php the_field('bonuses__pic') ?> width="475px" height="527px" alt="img">
        </div>
    </div>
</div>
<div class="page__consultations consultations">
    <div class="consultations__container -container">
        <h2 class="consultations__title title title_center title_black"><?php the_field('consultation__title') ?></h2>
        <div class="consultations__forms">
            <form action="#" class="consultations__form -contact-form">
                <div class="consultations__inputs">
                    <div class="consultations__input -input-form">
                        <input class="-req" autocomplete="off" type="text" name="name" data-value="Имя">
                    </div>
                    <div class="consultations__input -input-form">
                        <input class="-req -tel" autocomplete="off" type="tel" name="phone" data-value="Телефон">
                    </div>
                </div>
                <button type="submit" class="consultations-footer__btn btn btn_black">Получить бонусы</button>
                <p class="consultations__text" data-time="15">
                    <span></span>:<span></span>
                </p>
            </form>
        </div>
    </div>
</div>
<div class="page__facts facts" id="about">
    <div class="facts__container_title -container"></div>
    <div class="facts__item facts__item_1">
        <?php
        if (have_rows('factsStarygin')) :
            while (have_rows('factsStarygin')) : the_row(); ?>
                <div class="facts__container -container">
                    <div class="facts__main">
                        <div class="facts__image"><img src=<?php the_sub_field('factsStarygin__pic'); ?> alt="img"></div>
                    </div>
                    <div class="facts__body">
                        <h2 class="facts__title title title_center-m title_black" data-me="767.98, .facts__container_title, last"><?php the_field('facts__title') ?></h2>
                        <h3 class="facts__name" data-me="767.98, .facts__item_1 .facts__container, first">Старыгин<br>
                            Даниил Олегвич</h3>
                        <div class="facts__items items-facts">
                            <ul class="items-facts__list">
                                <?php
                                if (have_rows('factsStaryginList')) :
                                    while (have_rows('factsStaryginList')) : the_row(); ?>
                                        <li><span class="point"></span><?php the_sub_field('factsStaryginList__item') ?></li>
                                <?php endwhile;
                                endif;
                                ?>
                            </ul>
                            <div class="items-facts__label">Три главных приоритета в работе:</div>
                            <ul class="items-facts__list">
                                <?php
                                if (have_rows('factsStaryginThree')) :
                                    while (have_rows('factsStaryginThree')) : the_row(); ?>
                                        <li><span class="point"></span><?php the_sub_field('factsStaryginThree__item') ?></li>
                                <?php endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        ?>
    </div>
    <div class="facts__item facts__item_2 facts__item_change-color">
        <?php
        if (have_rows('factsStarygina')) :
            while (have_rows('factsStarygina')) : the_row(); ?>
                <div class="facts__container -container">
                    <div class="facts__main">
                        <div class="facts__image"><img src=<?php the_sub_field('factsStarygina__pic'); ?> alt="img"></div>
                    </div>
                    <div class="facts__body">
                        <h3 class="facts__name" data-me="767.98, .facts__item_1 .facts__container, first">Старыгина<br>
                            Анна Владимировна</h3>
                        <div class="facts__items items-facts">
                            <ul class="items-facts__list">
                                <?php
                                if (have_rows('factsStaryginaList')) :
                                    while (have_rows('factsStaryginaList')) : the_row(); ?>
                                        <li><span class="point"></span><?php the_sub_field('factsStaryginaList__item') ?></li>
                                <?php endwhile;
                                endif;
                                ?>
                            </ul>
                            <div class="items-facts__label">Три главных приоритета в работе:</div>
                            <ul class="items-facts__list">
                                <?php
                                if (have_rows('factsStaryginaThree')) :
                                    while (have_rows('factsStaryginaThree')) : the_row(); ?>
                                        <li><span class="point"></span><?php the_sub_field('factsStaryginaThree__item') ?></li>
                                <?php endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>
<div class="page__partners partners">
    <div class="partners__container -container">
        <h2 class="partners__title title title_center-m title_black"><?php the_field('partners__title') ?></h2>
        <h3 class="partners__sub-title"><?php the_field('partners__subtitle') ?></h3>
    </div>
    <div class="partners__marquee marquee-partners" data-marquee="15000">
        <div class="marquee-partners__inner" data-marquee-inner>
            <?php
            if (have_rows('partnersSlider')) :
                while (have_rows('partnersSlider')) : the_row(); ?>
                    <img src=<?php the_sub_field('partnersSlider__pic'); ?> alt="img">
                <?php endwhile;
                while (have_rows('partnersSlider')) : the_row(); ?>
                    <img src=<?php the_sub_field('partnersSlider__pic'); ?> alt="img">
                <?php endwhile;
                while (have_rows('partnersSlider')) : the_row(); ?>
                    <img src=<?php the_sub_field('partnersSlider__pic'); ?> alt="img">
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<div class="page__projects projects" id="cases">
    <div class="projects__container -container">
        <h2 class="projects__title title title_center-m title_white"><?php the_field('object__title') ?></h2>
        <div class="projects__row" data-tab="min, 0">
            <div class="projects__items -parent-tab-item" data-tab-items>
                <!-- Триггеры табов -->
                <?php
                if (have_rows('objectTriggers')) :
                    while (have_rows('objectTriggers')) : the_row(); ?>
                        <a href="#" class="projects__item" data-tab-item=<?php echo get_row_index(); ?>><?php the_sub_field('objectTriggers__trigger') ?></a>
                <?php endwhile;
                endif;
                ?>
            </div>
            <div class="projects__body">
                <!-- Табы -->
                <?php
                if (have_rows('objectTabs')) :
                    while (have_rows('objectTabs')) : the_row(); ?>
                        <?php $i = get_row_index(); ?>
                        <div class="projects__content" data-tab-content=<?php echo $i ?>>
                            <div class="projects__wrap works" data-tab="min, 767.98">
                                <div class="works__items" data-tab-items data-scroll>
                                    <div class="works__list -parent-tab-item" data-scroll-content>
                                        <!-- Триггеры подтабов -->
                                        <?php
                                        while (have_rows('objectSubTriggers')) : the_row();
                                            $i = get_row_index();
                                            while (have_rows('objectSubTriggers__container')) : the_row(); ?>
                                                <a href="#" class="works__item" data-tab-subitem=<?php echo $i; ?>>
                                                    <div class="works__address"><?php the_sub_field('objectSubTriggers__address') ?></div>
                                                    <div class="works__col">
                                                        <div class="works__row">срок продажи: <span><?php the_sub_field('objectSubTriggers__deadline') ?></span></div>
                                                        <div class="works__row">итоговая цена: <span><?php the_sub_field('objectSubTriggers__price') ?></span></div>
                                                    </div>
                                                </a>
                                        <?php endwhile;
                                        endwhile; ?>
                                    </div>
                                </div>
                                <div class="works__body">
                                    <!-- Подтабы -->
                                    <?php
                                    while (have_rows('objectSubTabs')) : the_row();
                                        $i = get_row_index(); ?>
                                        <div class="works__content" data-tab-content=<?php echo $i; ?>>
                                            <div class="works__wrap info-work">
                                                <!-- Слайдер таба -->
                                                <div class="info-work__slider slider-info-work">
                                                    <div class="slider-info-work__controls">
                                                        <!-- Триггеры слайдера в подтабе -->
                                                        <div class="slider-info-work__arrow -arrow-slider -arrow-slider_prev"><span class="-icon-arrow-right"></span></div>
                                                        <div class="slider-info-work__fraction"></div>
                                                        <div class="slider-info-work__arrow -arrow-slider -arrow-slider_next"><span class="-icon-arrow-right"></span></div>
                                                    </div>
                                                    <div class="slider-info-work__body swiper">
                                                        <div class="slider-info-work__wrapper swiper-wrapper">
                                                            <!-- Слайдеры таба -->
                                                            <?php
                                                            while (have_rows('objectSubTabs__slider')) : the_row(); ?>
                                                                <div class="slider-info-work__slide swiper-slide">
                                                                    <div class="slider-info-work__image -ai"><img src=<?php the_sub_field('objectSubTabs__pic'); ?> alt="img"></div>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                while (have_rows('objectSubTabs__content')) : the_row(); ?>
                                                    <!-- Контент таба -->
                                                    <div class="info-work__content">
                                                        <div class="info-work__address">г. Балашиха, ул. Реутовская,
                                                            д.12, ЖК Измайловский лес</div>
                                                        <div class="info-work__row">
                                                            <div class="info-work__col"><span><?php the_sub_field('objectSubTabs__deadline') ?></span>срок продажи</div>
                                                            <div class="info-work__col"><span><?php the_sub_field('objectSubTabs__price') ?></span>итоговая цена</div>
                                                        </div>
                                                        <div class="info-work__texts">
                                                            <?php the_sub_field('objectSubTabs__result') ?>
                                                        </div>
                                                        <a href="#" class="info-work__btn btn btn_black" data-popup-link=".popup-contact">Хочу так же</a>
                                                    </div>
                                                <?php endwhile;
                                                ?>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</div>
<div class="page__questions questions">
    <div class="questions__container -container">
        <h2 class="questions__title title title_center-m title_white"><?php the_field('questions__title'); ?></h2>
        <div class="questions__row" data-tab="min, 0">
            <div class="questions__items" data-tab-items>
                <div class="questions__list -parent-tab-item">
                    <?php
                    if (have_rows('questions__triggers')) :
                        while (have_rows('questions__triggers')) : the_row() ?>
                            <a href="#" class="questions__item" data-tab-item=<?php echo get_row_index(); ?>><?php the_sub_field('questions__trigger') ?></a>
                    <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="questions__body">
                <?php
                if (have_rows('questions__content')) :
                    while (have_rows('questions__content')) : the_row(); ?>
                        <div class="questions__content" data-tab-content=<?php echo get_row_index(); ?>>
                            <div class="questions__wrap info-questions">
                                <div class="info-questions__body">
                                    <h3 class="info-questions__title"><?php the_sub_field('questions__subtitle') ?></h3>
                                    <div class="info-questions__desc"><?php the_sub_field('questions__info') ?></div>
                                    <div class="info-questions__text"><?php the_sub_field('questions__describtion') ?></div>
                                    <div class="info-questions__footer">
                                        <div class="info-questions__link">Чек &#8209; лист <img src="http://localhost/wordpress/wp-content/uploads/2022/06/list.svg" alt="img"></div>
                                        <div class="info-questions__link">Консультация <img src="http://localhost/wordpress/wp-content/uploads/2022/06/contact.svg" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <form action="#" class="info-questions__form form-contact -contact-form">
                                    <div class="form-contact__title">Оставьте Ваш контакт и получите чек&#8209;лист и
                                        консультацию бесплатно</div>
                                    <div class="form-contact__text">Чек&#8209;лист начнёт скачиваться автоматически после
                                        заполнения и отправки формы</div>
                                    <div class="form-contact__inputs">
                                        <div class="form-contact__input -input-form"><input class="-req -name" autocomplete="off" type="text" name="name" data-value="Имя"></div>
                                        <div class="form-contact__input -input-form"><input class="-req -tel" autocomplete="off" type="tel" name="phone" data-value="Телефон"></div>
                                    </div>
                                    <label class="form-contact__check">
                                        <input type="checkbox" class="-req" name="checkbox">
                                        <span class="form-contact__checkbox"><span class="-icon-check"></span></span>
                                        <span class="form-contact__label">Отправляя заявку вы соглашаетесь с политикой
                                            конфиденциальности</span>
                                    </label>
                                    <button type="submit" class="form-contact__btn btn btn_black">Отправить</button>
                                </form>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="page__process process">
    <div class="process__container -container">
        <div class="process__main">
            <div class="process__fixed">
                <h2 class="process__title title title_center-m title_white"><?php the_field('steps__title') ?></h2>
                <form action="#" class="process__form form-contact -contact-form" data-me="767.98, .process__container, last">
                    <div class="form-contact__title">Оставьте Ваш контакт и получите чек&#8209;лист и консультацию
                        бесплатно</div>
                    <div class="form-contact__text">Чек&#8209;лист начнёт скачиваться автоматически после заполнения
                        и отправки формы</div>
                    <div class="form-contact__inputs">
                        <div class="form-contact__input -input-form"><input class="-req -name" autocomplete="off" type="text" name="name" data-value="Имя"></div>
                        <div class="form-contact__input -input-form"><input class="-req -tel" autocomplete="off" type="tel" name="phone" data-value="Телефон"></div>
                    </div>
                    <label class="form-contact__check">
                        <input type="checkbox" class="-req" name="checkbox">
                        <span class="form-contact__checkbox"><span class="-icon-check"></span></span>
                        <span class="form-contact__label">Отправляя заявку вы соглашаетесь с политикой
                            конфиденциальности</span>
                    </label>
                    <button type="submit" class="form-contact__btn btn btn_black">Отправить</button>
                </form>
            </div>
        </div>
        <div class="process__items" data-spollers="max, 767.98">
            <?php if (have_rows('steps__box')) :
                while (have_rows('steps__box')) : the_row(); ?>
                    <div class="process__item item-process">
                        <div class="item-process__header" data-spoller-item>
                            <div class="item-process__title"><?php the_sub_field('steps__subtitle') ?></div>
                            <div class="item-process__line"></div>
                            <div class="item-process__num"><?php echo 0 . get_row_index(); ?></div>
                            <span class="item-process__arrow -icon-arrow-right-big"></span>
                        </div>
                        <div class="item-process__body">
                            <div class="item-process__texts">
                                <?php the_sub_field('steps__description'); ?>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
<div class="page__reviews reviews" id="reviews">
    <div class="reviews__container -container">
        <h2 class="reviews__title title title_center title_white">отзывы</h2>
        <div class="reviews__slider slider-reviews">
            <div class="slider-reviews__arrows">
                <div class="slider-reviews__arrow -arrow-slider -arrow-slider_prev"><span class="-icon-arrow-right-big"></span></div>
                <div class="slider-reviews__arrow -arrow-slider -arrow-slider_next"><span class="-icon-arrow-right-big"></span></div>
            </div>
            <div class="slider-reviews__body swiper">
                <div class="slider-reviews__wrapper swiper-wrapper">
                    <?php if (have_rows('reviews__slider')) :
                        while (have_rows('reviews__slider')) : the_row(); ?>
                            <?php while (have_rows('reviews__slide')) : the_row(); ?>
                                <div class="slider-reviews__slide swiper-slide">
                                    <div class="slider-reviews__image -ai">
                                        <img src=<?php the_sub_field('reviews__pic'); ?> alt="img">
                                        <div class="slider-reviews__watch watch-icon -link-watch">
                                            <a href="#" class="watch-icon__link"></a>
                                            <div class="watch-icon__content">
                                                <span class="watch-icon__icon -icon-play"></span>
                                                <img src="http://localhost/wordpress/wp-content/uploads/2022/06/btn.svg" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-reviews__content">
                                        <div class="slider-reviews__name"><?php the_sub_field('reviews__name') ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page__blog blog" id="blog">
    <div class="blog__container -container">
        <div class="blog__header">
            <h2 class="blog__title title title_center-m title_white">Блог</h2>
            <a href="" class="blog__btn btn btn_white" data-btn-loadmore-news="open" data-me="767.98, .blog__footer-1, last">Все новости</a>
        </div>
        <div class="blog__grid">
            <div class="blog__item item-blog">
                <a href="" class="item-blog__link"></a>
                <div class="item-blog__image -ai"><img src="img/blog/image.jpg" alt=""></div>
                <div class="item-blog__content">
                    <div class="item-blog__header">
                        <h4 class="item-blog__title">Aenean massa</h4>
                        <div class="item-blog__date">March 23</div>
                    </div>
                    <div class="item-blog__text">Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor sit
                        amet, consectetuer</div>
                </div>
            </div>
            <div class="blog__item item-blog">
                <a href="" class="item-blog__link"></a>
                <div class="item-blog__image -ai"><img src="img/blog/image.jpg" alt=""></div>
                <div class="item-blog__content">
                    <div class="item-blog__header">
                        <h4 class="item-blog__title">Aenean massa</h4>
                        <div class="item-blog__date">March 23</div>
                    </div>
                    <div class="item-blog__text">Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor sit
                        amet, consectetuer</div>
                </div>
            </div>
            <div class="blog__item item-blog">
                <a href="" class="item-blog__link"></a>
                <div class="item-blog__image -ai"><img src="img/blog/image.jpg" alt=""></div>
                <div class="item-blog__content">
                    <div class="item-blog__header">
                        <h4 class="item-blog__title">Aenean massa</h4>
                        <div class="item-blog__date">March 23</div>
                    </div>
                    <div class="item-blog__text">Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor sit
                        amet, consectetuer</div>
                </div>
            </div>
        </div>
        <div class="blog__footer-1"></div>
        <div class="blog__footer -hide">
            <a href="" class="blog__btn btn btn_white" data-btn-loadmore-news="close">Назад</a>
            <a href="" class="blog__btn btn btn_white">Смотреть ещё</a>
        </div>
    </div>
</div>
<div class="popup-contact" data-popup>
    <div class="popup-contact__body" data-popup-body>
        <form action="#" class="popup-contact__form form-contact -contact-form" data-popup-content>
            <a href="" class="popup-contact__close" data-popup-close><img src="img/form/close.svg"></a>
            <div class="form-contact__title">Оставьте Ваш контакт и получите чек&#8209;лист и консультацию бесплатно
            </div>
            <div class="form-contact__text">Чек&#8209;лист начнёт скачиваться автоматически после заполнения и
                отправки формы</div>
            <div class="form-contact__inputs">
                <div class="form-contact__input -input-form"><input class="-req -name" autocomplete="off" type="text" name="name" data-value="Имя"></div>
                <div class="form-contact__input -input-form"><input class="-req -tel" autocomplete="off" type="tel" name="phone" data-value="Телефон"></div>
            </div>
            <label class="form-contact__check">
                <input type="checkbox" class="-req" name="checkbox">
                <span class="form-contact__checkbox"><span class="-icon-check"></span></span>
                <span class="form-contact__label">Отправляя заявку вы соглашаетесь с политикой
                    конфиденциальности</span>
            </label>
            <button type="submit" class="form-contact__btn btn btn_black">Отправить</button>
        </form>
    </div>
</div>
<style>
    .slider__body {
        width: 100%;
    }
</style>
<?php
get_footer();
