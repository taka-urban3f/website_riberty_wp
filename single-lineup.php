<?php get_header('sub'); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('p-item') ?>>
                <h2 class="p-item__h2"><?php the_field('category'); ?></h2>
                <dl class="p-item__dlSummary">
                    <dt class="p-item__dlSummary__dt"><?php the_field('name'); ?></dt>
                    <dd class="p-item__dlSummary__dd"><?php the_field('price'); ?></dd>
                </dl>

                <div class="p-item__flex">
                    <div class="p-item__cntBigImg">
                        <?php $field_img = get_field('picture1'); ?>
                        <?php if ($field_img) : ?>
                            <div class="p-item__cntBigImg__inner"><img src="<?php echo esc_url($field_img['url']); ?>" alt="" class="p-item__bigImg"></div>
                        <?php endif; ?>
                    </div>
                    <div class="p-item__grid">
                        <!-- これからカスタムデータ属性にデカいサイズのURLを設定する。JSも要修正
                         それとフィールドの値が取得できたかどうかチェックするかどうか -->
                        <?php for ($n = 1; $field_img = get_field('picture' . $n); $n++) : ?>
                            <?php if ($field_img) : ?>
                                <div class="p-item__grid__cntImg">
                                    <div class="p-item__grid__cntImgInner"><img src="<?php echo esc_url($field_img['sizes']['item-thumbnail']); ?>" alt="" class="p-item__grid__img"></div>
                                </div>
                            <?php else : ?>
                                break 1;
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>

                <dl class="p-item__dlDesc">
                    <dt class="p-item__dlDesc__dt">商品説明</dt>
                    <dd class="p-item__dlDesc__dd">
                        <?php $field_desc = get_field('description'); ?>
                        <?php if ($field_desc) : ?>
                            <?php echo nl2br(esc_html(get_field('description'))); ?>
                        <?php endif; ?>
                    </dd>
                </dl>

            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer();
