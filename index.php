<?php get_header(); ?>

<!-- <header class="l-listPageHeader">
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
    <picture>
        <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hero_news.jpg">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/hero_news_sp.jpg" alt="" class="l-listPageHeader__heroImg">
    </picture>
</header> -->

<main>
    <section class="p-secNewsList">
        <div class="p-secNewsList__h2 c-hDeco">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_news.svg" alt="ニュース" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">ニュース</h2>
        </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <dl id="post-<?php the_ID(); ?>" <?php post_class('p-secNewsList__dl') ?>>
                    <dt class="secNewsList__dt"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                    <dd class="secNewsList__dd"><?php the_title(); ?></dd>
                </dl>
            <?php endwhile; ?>

        <?php endif; ?>

    </section>

    <?php get_footer();
