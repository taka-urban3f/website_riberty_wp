<?php get_header('sub'); ?>

<main>
    <section class="p-secNewsList">
        <div class="c-hDeco">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_news.svg" alt="ニュース" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">ニュース</h2>
        </div>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="p-secNewsList__ctn">
                    <a href="<?php the_permalink(); ?>">
                        <dl id="post-<?php the_ID(); ?>" <?php post_class('p-secNewsList__dl') ?>>
                            <dt class="p-secNewsList__dt"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                            <dd class="p-secNewsList__dd"><?php the_title(); ?></dd>
                        </dl>
                    </a>
                </div>
            <?php endwhile; ?>

            <div class="p-secNewsList__pn c-pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php endif; ?>

    </section>
</main>

<?php get_footer();
