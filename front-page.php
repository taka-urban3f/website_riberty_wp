<?php get_header(); ?>

<main>
    <section class="p-secFeature">
        <h2 class="p-secFeature__h2">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_feature.png">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/text_feature_sp.png" alt="今とくに欲しいギターがないって！？でも気になるギターはあるんでしょ？" class="p-secFeature__h2__img1">
            </picture>
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/playing_man.png">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/playing_man_sp.png" alt="" class="p-secFeature__h2__img2">
            </picture>
        </h2>

        <div class="p-secFeature__boxCatch">
            <p class="p-secFeature__catch1 u-textAnime2" data-ta-base-del="0" data-ta-each-del="0.04">
                <span class="u-textAnime2__unit">当店では気軽に</span><br class="p-secFeature__br">
                <span class="u-textAnime2__unit">ギターの音色を確認できます！</span>
            </p>
            <p class="p-secFeature__catch2 u-textAnime2" data-ta-base-del="0" data-ta-each-del="0.04">
                <span class="u-textAnime2__unit">見るだけでもOK！</span><br class="p-secFeature__br">
                <span class="u-textAnime2__unit">是非手に取って近くでご覧ください！</span>
            </p>
        </div>

        <div class="p-secFeature__wrapper">
            <div class="p-secFeature__ctn1">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pic1.png">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/pic1_sp.png" alt="" class="p-secFeature__img">
                </picture>
            </div>
            <div class="p-secFeature__ctn2">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pic2.png">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/pic2_sp.png" alt="" class="p-secFeature__ctn2__img">
                </picture>
                <p class="p-secFeature__ctn2__p">店長の成田です。ギターについて何でもご相談ください！リペアーやメンテナンスについてもご対応いたします！</p>
            </div>
        </div>
    </section>

    <section class="p-secLineup" id="secLineup">
        <div class="c-hDeco">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime u-skewAnime--nojs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_lineup.svg" alt="ラインナップ" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">ラインナップ</h2>
        </div>
        <div class="p-secLineup__grid">
            <!-- <a href="#">
                <div class="p-secLineup__grid__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar1.jpg " alt="レスポールタイプ" class="p-secLineup__grid__img">
                    <p class="p-secLineup__grid__name">Les Paul Type</p>
                    <p class="p-secLineup__grid__price">￥１２０、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar2.jpg " alt="テレキャスタータイプ" class="p-secLineup__grid__img">
                    <p class="p-secLineup__grid__name">TelecasterType</p>
                    <p class="p-secLineup__grid__price">￥１００、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar3.jpg " alt="テレキャスタータイプ" class="p-secLineup__grid__img">
                    <p class="p-secLineup__grid__name">Telecaster Type</p>
                    <p class="p-secLineup__grid__price">￥１１０、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar4.jpg " alt="ストラトキャスタータイプ" class="p-secLineup__grid__img">
                    <p class="p-secLineup__grid__name">StratocasterType</p>
                    <p class="p-secLineup__grid__price">￥１００、０００（税込）</p>
                </div>
            </a> -->
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <div class="p-secLineup__grid__ctn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar1.jpg" alt="レスポールタイプ" class="p-secLineup__grid__img">
                        <ul class="p-secLineup__grid__ul">
                            <li class="p-secLineup__grid__cat">Les Paul Type</li>
                            <li class="p-secLineup__grid__name">MakerX model-1234</li>
                        </ul>
                    </div>
                    <p class="p-secLineup__grid__price">￥１２０、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <div class="p-secLineup__grid__ctn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar2.jpg" alt="レスポールタイプ" class="p-secLineup__grid__img">
                        <ul class="p-secLineup__grid__ul">
                            <li class="p-secLineup__grid__cat">Les Paul Type</li>
                            <li class="p-secLineup__grid__name">MakerX model-1234</li>
                        </ul>
                    </div>
                    <p class="p-secLineup__grid__price">￥１２０、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <div class="p-secLineup__grid__ctn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar3.jpg" alt="レスポールタイプ" class="p-secLineup__grid__img">
                        <ul class="p-secLineup__grid__ul">
                            <li class="p-secLineup__grid__cat">Les Paul Type</li>
                            <li class="p-secLineup__grid__name">MakerX model-1234</li>
                        </ul>
                    </div>
                    <p class="p-secLineup__grid__price">￥１２０、０００（税込）</p>
                </div>
            </a>
            <a href="#">
                <div class="p-secLineup__grid__box">
                    <div class="p-secLineup__grid__ctn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/guitar4.jpg" alt="レスポールタイプ" class="p-secLineup__grid__img">
                        <ul class="p-secLineup__grid__ul">
                            <li class="p-secLineup__grid__cat">Les Paul Type</li>
                            <li class="p-secLineup__grid__name">MakerX model-1234</li>
                        </ul>
                    </div>
                    <p class="p-secLineup__grid__price">￥１２０、０００（税込）</p>
                </div>
            </a>
        </div>

        <a href="#" class="p-secLineup__btn c-btn">もっと見る</a>
    </section>

    <section class="p-secBlog" id="secBlog">
        <div class="p-secBlog__box">
            <h2 class="p-secBlog__h2">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/face.png" alt="" class="p-secBlog__h2__imgFace">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_tubuyaki.png" alt="店長のつぶやきブログ" class="p-secBlog__h2__imgText">
            </h2>
            <dl class="p-secBlog__fukidashi">
                <dt class="p-secBlog__fukidashi__dt">2024.6.14</dt>
                <dd class="p-secBlog__fukidashi__dd">先日、お客様からご依頼いただきましたリペアが先ほど
                    完了しました！　只今コーヒーブレイク中。</dd>
            </dl>
            <dl class="p-secBlog__fukidashi">
                <dt class="p-secBlog__fukidashi__dt">2024.6.15</dt>
                <dd class="p-secBlog__fukidashi__dd">まだ６月なのに真夏みたいに暑いですねー。
                    こんな日はジミヘン聴いて乗り切りましょう！</dd>
            </dl>
            <a href="#" class="p-secBlog__btn c-btn">過去のつぶやきを見る</a>
        </div>
    </section>

    <section class="p-secNews" id="secNews">
        <div class="c-hDeco">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime u-skewAnime--nojs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_news.svg" alt="ニュース" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">ニュース</h2>
        </div>

        <?php $query = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
        ); ?>

        <?php $news_list_query = new WP_Query($query); ?>

        <?php if ($news_list_query->have_posts()) : ?>
            <?php while ($news_list_query->have_posts()) : ?>
                <?php $news_list_query->the_post(); ?>
                <dl id="post-<?php the_ID(); ?>" <?php post_class('p-secNews__dl') ?>>
                    <dt class="p-secNews__dt"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time></dt>
                    <dd class="p-secNews__dd"><?php the_title(); ?></dd>
                </dl>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <a href="<?php echo esc_url(get_permalink(get_page_by_path('newslist')->ID)); ?>" class="p-secNews__btn c-btn">もっと見る</a>

    </section>

    <div class="p-secBanner">
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/banner.png">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/sp/banner_sp.png" alt="弦やメンテナンス品などの消耗品もリバティーへゴー" class="p-secBanner__img">
        </picture>
    </div>

    <section class="p-secInformation" id="secInformation">
        <div class="c-hDeco c-hDeco--mini">
            <div class="c-hDeco__ctn">
                <div class="u-skewAnime u-skewAnime--nojs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/text_information.svg" alt="インフォメーション" class="c-hDeco__imgText u-skewAnime__target"></div>
            </div>
            <h2 class="c-hDeco__p">インフォメーション</h2>
        </div>

        <p class="p-secInformation__p1">ギターショップ　リバティー</p>

        <div class="p-secInformation__flex">
            <dl class="p-secInformation__dl">
                <div class="p-secInformation__ctn">
                    <dt class="p-secInformation__ctn__dt">住所：</dt>
                    <dd class="p-secInformation__ctn__dd">〒XXX-XXXX　XXXXXXXXXXXXX-X-X</dd>
                </div>
                <div class="p-secInformation__ctn">
                    <dt class="p-secInformation__ctn__dt">TEL：</dt>
                    <dd class="p-secInformation__ctn__dd">XXXX-XX-XXXX</dd>
                </div>
                <div class="p-secInformation__ctn">
                    <dt class="p-secInformation__ctn__dt">営業時間：</dt>
                    <dd class="p-secInformation__ctn__dd">10:00 - 19:00</dd>
                </div>
                <div class="p-secInformation__ctn">
                    <dt class="p-secInformation__ctn__dt">定休日：</dt>
                    <dd class="p-secInformation__ctn__dd">毎週月曜日</dd>
                </div>
            </dl>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" alt="ギターショップ リバティー" class="p-secInformation__imgLogo">
        </div>

        <div class="p-secInformation__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2372.821077413649!2d132.4502157021572!3d34.40940231039476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355a9898558f872b%3A0xa145165c91854002!2z44CSNzMzLTAwMTEg5bqD5bO255yM5bqD5bO25biC6KW_5Yy65qiq5bed55S677yT5LiB55uu77yS4oiS77yS77yW!5e0!3m2!1sja!2sjp!4v1719808581695!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php get_footer();
