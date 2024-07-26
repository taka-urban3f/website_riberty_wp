<?php get_header('sub'); ?>

<main>
    <section class="p-secLineupList" id="secLineup">
        <div class="c-hDeco">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime u-skewAnime--nojs"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/text_lineup.svg" alt="ラインナップ" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">ラインナップ</h2>
        </div>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = array(
            'post_type' => 'lineup',
            'posts_per_page' => 12,
            'paged' => $paged,
        );
        $lineup_query = new WP_Query($query);
        ?>

        <?php if ($lineup_query->have_posts()) : ?>

            <div class="p-secLineupList__grid">
                <?php while ($lineup_query->have_posts()) : ?>
                    <?php $lineup_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('p-secLineupList__grid__box') ?>>
                            <div class="p-secLineupList__grid__ctn">
                                <?php
                                $field_img = get_field('picture1');
                                if ($field_img) : ?>
                                    <img src="<?php echo esc_url($field_img['sizes']['item-thumbnail']); ?>" alt="<?php esc_attr(the_field('name')); ?>" class="p-secLineupList__grid__img">
                                <?php endif; ?>

                                <ul class="p-secLineupList__grid__ul">
                                    <li class="p-secLineupList__grid__cat"><?php the_field('category'); ?></li>
                                    <li class="p-secLineup__grid__name"><?php the_title(); ?></li>
                                </ul>
                            </div>
                            <p class="p-secLineupList__grid__price"><?php the_field('price'); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>

            <div class="p-secLineupList__pn c-pagination">
                <?php
                echo paginate_links(
                    array(
                        'total' => $lineup_query->max_num_pages,
                        'current' => max(1, $paged),
                    )
                );
                ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer();
