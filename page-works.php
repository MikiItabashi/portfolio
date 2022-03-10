<?php get_header(); ?>

<!-- works -->
<section class="works">
    <div class="works__wrapper section section--works">
        <div class="works__title title">
            <h2 class="title__primary">Works</h2>
            <p class="title__secondary">制作実績</p>
        </div>
        <!-- /.works__title title -->
        <div class="works__items">
            <?php
            $args = array(
                'posts_per_page' => -1, //全件取得
                'post_type' => 'post', //取得対象は投稿タイプ
                'category_name' => 'lp', //カテゴリーはLP
                'tag' => 'pickup', //タグはpickup
            );
            $works_item = new WP_Query($args);
            if ($works_item->have_posts()) :
                while ($works_item->have_posts()) : $works_item->the_post();
                    get_template_part('works-item');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <!-- /.works__items -->
        <div class="works__more">
            <p class="more js-more--lp">More</p>
        </div>
        <!-- /.works__more -->
        <div class="works__items works__items--lp">

            <?php
            $args = array(
                'posts_per_page' => -1, //全件取得
                'post_type' => 'post', //取得対象は投稿タイプ
                'category_name' => 'lp', //カテゴリーはLP
                'tag__not_in' => 5, //pickup以外
            );
            $works_item = new WP_Query($args);
            if ($works_item->have_posts()) :
                while ($works_item->have_posts()) : $works_item->the_post();
                    get_template_part('works-item');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <!-- /.works__items works__items--lp -->

        <!-- 背景の切り替えを波にする -->
        <div class="works__wave wave">
            <svg class="wave__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="wave-fill"></path>
            </svg>
        </div>
        <!-- /.works__wave -->
    </div>
    <!-- /.works__wrapper section section--works -->
</section>
<!-- /.works -->
<!-- works--wp -->
<section class="works--wp">
    <div class="works__wrapper section section--works">
        <div class="works__items">

            <?php
            $args = array(
                'posts_per_page' => -1, //全件取得
                'post_type' => 'post', //取得対象は投稿タイプ
                'category_name' => 'wp', //カテゴリーはWP
                'tag' => 'pickup', //タグはpickup
            );
            $works_item = new WP_Query($args);
            if ($works_item->have_posts()) :
                while ($works_item->have_posts()) : $works_item->the_post();
                    get_template_part('works-item');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <!-- /.works__items -->
        <div class="works__more">
            <p class="more js-more--wp">More</p>
        </div>
        <!-- /.works__more -->
        <div class="works__items works__items--wp">

            <?php
            $args = array(
                'posts_per_page' => -1, //全件取得
                'post_type' => 'post', //取得対象は投稿タイプ
                'category_name' => 'wp', //カテゴリーはWP
                'tag__not_in' => 5, //pickup以外
            );
            $works_item = new WP_Query($args);
            if ($works_item->have_posts()) :
                while ($works_item->have_posts()) : $works_item->the_post();
                    get_template_part('works-item');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <!-- /.works__items works__items--wp -->

    </div>
    <!-- /.works__wrapper section section--works -->
</section>
<!-- /.works--wp -->

<?php get_footer(); ?>