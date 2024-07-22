<?php get_header('sub'); ?>

<div class="l-title c-hDeco">
    <div class="c-hDeco__ctn">
        <div class="u-skewAnime"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/text_news.svg" alt="ニュース" class="c-hDeco__imgText u-skewAnime__target"></div>
    </div>
    <h2 class="c-hDeco__p">ニュース</h2>
</div>

<div class="l-rowContainer">
    <main class="l-rowContainer__main">
        <article>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <dl id="post-<?php the_ID(); ?>" <?php post_class('p-newsEach') ?>>
                        <dt class="p-newsEach__dt"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                        <dd class="p-newsEach__title"><?php the_title(); ?></dd>
                        <dd class="p-newsEach__text"><?php the_content(); ?></dd>
                    </dl>
                <?php endwhile; ?>
            <?php endif; ?>
        </article>
    </main>
    <aside class="l-rowContainer__sideBar p-sideBar">
        <!-- <h3 class="p-sideBar__h3">アーカイブ</h3>
        <ol class="p-sideBar__ol">
            <li class="p-sideBar__li"><a href="#">２０２４年４月</a></li>
            <li class="p-sideBar__li"><a href="#">２０２４年５月</a></li>
            <li class="p-sideBar__li"><a href="#">２０２４年６月</a></li>
            <li class="p-sideBar__li"><a href="#">２０２４年７月</a></li>
        </ol> -->
        <?php if (is_active_sidebar('sidebar-widget')) : ?>
            <?php dynamic_sidebar('sidebar-widget'); ?>
        <?php endif; ?>
    </aside>
</div>

<?php get_footer();
