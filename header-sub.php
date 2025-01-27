<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/favicon.ico">

    <script>
        document.documentElement.classList.remove('no-js');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-home="<?php echo esc_url(home_url('/')); ?>">
    <?php wp_body_open(); ?>
    <div class="l-loading">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo_mini.png" alt="" class="l-loading__img" fetchpriority="high">
        <p class="l-loading__p">読み込み中・・・</p>
    </div>

    <header class="l-subPageHeader">
        <div class="l-subPageHeader__bar">
            <h1 class="l-subPageHeader__h1"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/logo.png" alt="ギターショップ リバティー" class="l-subPageHeader__h1__img"></a></h1>
            <div class="l-subPageHeader__btn c-humBtn">
                <div class="c-humBtn__box">
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                    <span class="c-humBtn__line"></span>
                </div>
                <p class="c-humBtn__text">メニュー</p>
            </div>
            <ul class="l-subPageHeader__ul">
                <li class="l-subPageHeader__ul__li"><a href="<?php echo esc_url(home_url('/')); ?>#secLineup" class="l-subPageHeader__ul__a">ラインナップ</a></li>
                <li class="l-subPageHeader__ul__li"><a href="<?php echo esc_url(home_url('/')); ?>#secBlog" class="l-subPageHeader__ul__a">店長のつぶやき</a></li>
                <li class="l-subPageHeader__ul__li"><a href="<?php echo esc_url(home_url('/')); ?>#secNews" class="l-subPageHeader__ul__a">ニュース</a></li>
                <li class="l-subPageHeader__ul__li"><a href="<?php echo esc_url(home_url('/')); ?>#secInformation" class="l-subPageHeader__ul__a">インフォメーション</a></li>
            </ul>
        </div>

        <?php
        $img_url = '';
        $img_sp_url = '';

        if (is_home() || is_singular('post')) {
            //ニュース一覧・個別ページの場合のヒーロー画像
            $img_url = esc_url(get_theme_file_uri()) . '/assets/img/hero_news.jpg';
            $img_sp_url = esc_url(get_theme_file_uri()) . '/assets/img/sp/hero_news_sp.jpg';
        } elseif (is_post_type_archive('lineup') || is_singular('lineup')) {
            //商品の一覧・個別ページの場合のヒーロー画像。
            $img_url = esc_url(get_theme_file_uri()) . '/assets/img/hero_lineup.jpg';
            $img_sp_url = esc_url(get_theme_file_uri()) . '/assets/img/sp/hero_lineup_sp.jpg';
        } elseif (is_post_type_archive('tsubuyaki') || is_singular('tsubuyaki')) {
            //つぶやきの一覧・個別ページの場合のヒーロー画像。
            $img_url = esc_url(get_theme_file_uri()) . '/assets/img/hero_tsubuyaki.jpg';
            $img_sp_url = esc_url(get_theme_file_uri()) . '/assets/img/sp/hero_tsubuyaki_sp.jpg';
        }
        ?>
        <?php if ($img_url && $img_sp_url) : ?>
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo $img_url ?>">
                <img src="<?php echo $img_sp_url ?>" alt="" class="l-subPageHeader__heroImg">
            </picture>
        <?php endif; ?>

    </header>

    <?php if (function_exists('bcn_display') && !is_404()) : ?>
        <nav class="c-breadCrumb" typeof="BreadcrumbList" vocab="http://schema.org/" aria-label="現在のページ">
            <?php bcn_display(); ?>
        </nav>
    <?php endif; ?>

    <div class="l-menu">
        <ul class="l-menu__ul">
            <li class="l-menu__li"><a href="<?php echo esc_url(home_url('/')); ?>#secLineup" class="l-menu__a">ラインナップ</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url(home_url('/')); ?>#secBlog" class="l-menu__a">店長のつぶやき</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url(home_url('/')); ?>#secNews" class="l-menu__a">ニュース</a></li>
            <li class="l-menu__li"><a href="<?php echo esc_url(home_url('/')); ?>#secInformation" class="l-menu__a">インフォメーション</a></li>
        </ul>
    </div>

    <a href="#" class="p-topBtn">
        <p class="p-topBtn__text">TOPへ戻る</p>
    </a>