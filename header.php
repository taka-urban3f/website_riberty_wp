<!DOCTYPE html>
<html lang="ja" class="no-js">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> - トップページ - </title>

    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/favicon.ico">

    <script>document.documentElement.classList.remove('no-js');</script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-home="<?php echo esc_url( home_url( '/' ) ); ?>">
    <?php wp_body_open(); ?>
    <div class="l-loading">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_mini.png" alt="" class="l-loading__img" fetchpriority="high">
        <p class="l-loading__p">読み込み中・・・</p>
    </div>

    <header class="l-header">
        <div class="l-header__bar">
            <h1 class="l-header__h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo.png" alt="ギターショップ リバティー" class="l-header__h1__img"></a></h1>
            <div class="l-header__btn c-humBtn">
                <div class="c-humBtn__box">
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                </div>
                <p class="c-humBtn__text">メニュー</p>
            </div>
            <ul class="l-header__ul">
                <li class="l-header__ul__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secLineup" class="l-header__ul__a">ラインナップ</a></li>
                <li class="l-header__ul__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secBlog" class="l-header__ul__a">店長のつぶやき</a></li>
                <li class="l-header__ul__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secNews" class="l-header__ul__a">ニュース</a></li>
                <li class="l-header__ul__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secInformation" class="l-header__ul__a">インフォメーション</a></li>
            </ul>
        </div>
        <div class="l-header__hero">
            <div class="l-header__hero__h2 u-textAnime1" data-ta-base-del="0.5" data-ta-each-del="0.06">
                <div class="l-header__hero__ctn u-swayAnime">
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/text_bura.png">
                        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/sp/text_bura_sp.png" alt="ぶらっ" class="l-header__hero__img">
                    </picture>
                </div>
                <span class="u-textAnime1__unit">と</span><span class="l-header__hero__span u-textAnime1__unit">立ち寄る</span><span class="u-textAnime1__unit">ギターショップ</span><br><span class="u-textAnime1__unit">「リバティー」へようこそ！</span>
            </div>
            <div class="p-promptScroll"><span class="p-promptScroll__text">スクロール</span><span class="p-promptScroll__arrow"></span></div>
        </div>
    </header>

    <div class="l-menu">
        <ul class="l-menu__ul">
            <li class="l-menu__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secLineup" class="l-menu__a">ラインナップ</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secBlog" class="l-menu__a">店長のつぶやき</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secNews" class="l-menu__a">ニュース</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#secInformation" class="l-menu__a">インフォメーション</a></li>
        </ul>
    </div>

    <a href="#" class="p-topBtn">
        <p class="p-topBtn__text">TOPへ戻る</p>
    </a>