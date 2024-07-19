<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> - トップページ - </title>

    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-loading l-loading--nojs">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo_mini.png" alt="" class="l-loading__img" fetchpriority="high">
        <p class="l-loading__p">読み込み中・・・</p>
    </div>

    <header class="l-listPageHeader">
        <div class="l-listPageHeader__bar">
            <h1 class="l-listPageHeader__h1"><a href="index.html"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ギターショップ リバティー" class="l-listPageHeader__h1__img"></a></h1>
            <div class="l-listPageHeader__btn c-humBtn">
                <div class="c-humBtn__box">
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                </div>
                <p class="c-humBtn__text">メニュー</p>
            </div>
            <ul class="l-listPageHeader__ul">
                <li class="l-listPageHeader__ul__li"><a href="index.html#secLineup" class="l-listPageHeader__ul__a">ラインナップ</a></li>
                <li class="l-listPageHeader__ul__li"><a href="index.html#secBlog" class="l-listPageHeader__ul__a">店長のつぶやき</a></li>
                <li class="l-listPageHeader__ul__li"><a href="index.html#secNews" class="l-listPageHeader__ul__a">ニュース</a></li>
                <li class="l-listPageHeader__ul__li"><a href="index.html#secInformation" class="l-listPageHeader__ul__a">インフォメーション</a></li>
            </ul>
        </div>

        <?php if (is_home()) {
            $img_url = esc_url(get_template_directory_uri()) . '/assets/img/hero_news.jpg';
            $img_sp_url = esc_url(get_template_directory_uri()) . '/assets/img/sp/hero_news_sp.jpg';
        } elseif (is_singular('lineup')) {
            $img_url = esc_url(get_template_directory_uri()) . '/assets/img/hero_lineup.jpg';
            $img_sp_url = esc_url(get_template_directory_uri()) . '/assets/img/sp/hero_lineup_sp.jpg';
        } elseif (is_singular('tsubuyaki')) {
            $img_url = esc_url(get_template_directory_uri()) . '/assets/img/hero_tsubuyaki.jpg';
            $img_sp_url = esc_url(get_template_directory_uri()) . '/assets/img/sp/hero_tsubuyaki_sp.jpg';
        } ?>

        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo $img_url ?>">
            <img src="<?php echo $img_sp_url ?>" alt="" class="l-listPageHeader__heroImg">
        </picture>

    </header>

    <div class="l-menu">
        <ul class="l-menu__ul">
            <li class="l-menu__li"><a href="index.html#secLineup" class="l-menu__a">ラインナップ</a></li>
            <li class="l-menu__li"><a href="index.html#secBlog" class="l-menu__a">店長のつぶやき</a></li>
            <li class="l-menu__li"><a href="index.html#secNews" class="l-menu__a">ニュース</a></li>
            <li class="l-menu__li"><a href="index.html#secInformation" class="l-menu__a">インフォメーション</a></li>
        </ul>
    </div>

    <a href="#" class="p-topBtn">
        <p class="p-topBtn__text">TOPへ戻る</p>
    </a>