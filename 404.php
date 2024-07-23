<?php get_header('sub'); ?>

<main>
    <section class="p-sec404">
        <h2 class="p-sec404__h2">
            <p class="p-sec404__h2__p">おっと！<br>
            お探しのページはないみたいだよ！</p>
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/playing_man.png">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/sp/playing_man_sp.png" alt="" class="p-sec404__h2__imgMan">
            </picture>
        </h2>
    </section>
</main>

<?php get_footer();
