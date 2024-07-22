<?php get_header('sub'); ?>

<main>
    <section class="p-secBlogList" id="secBlogList">
        <div class="p-secBlogList__box">
            <h2 class="p-secBlogList__h2">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/face.png" alt="" class="p-secBlogList__h2__imgFace">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/text_tubuyaki.png" alt="店長のつぶやきブログ" class="p-secBlogList__h2__imgText">
            </h2>

            <?php $query = array(
                'post_type' => 'tsubuyaki',
                'posts_per_page' => 10,
            ); ?>
            <?php $lineup_query = new WP_Query($query); ?>

            <?php if ($lineup_query->have_posts()) : ?>
                <?php while ($lineup_query->have_posts()) : ?>
                    <?php $lineup_query->the_post(); ?>
                    <dl id="post-<?php the_ID(); ?>" <?php post_class('p-secBlogList__fukidashi') ?>>
                        <dt class="p-secBlogList__fukidashi__dt"><time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time></dt>
                        <dd class="p-secBlogList__fukidashi__dd"><?php the_content(); ?></dd>
                    </dl>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer();
