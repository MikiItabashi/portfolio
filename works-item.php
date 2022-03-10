<div class="works__item works-item">
    <!-- カテゴリーを取得 -->
    <?php
    $cat = get_the_category();
    $cat = $cat[0];
    ?>
    <!-- /カテゴリーを取得 -->

    <p class="works-item__category"><?php echo get_cat_name($cat->term_id); ?></p>

    <?php if (get_field('img')) : ?>
        <div class="works-item__img">
            <img src="<?php the_field('img'); ?>" alt="<?php the_field('title'); ?>">
        </div>
    <?php endif; ?>
    <!-- /.works-item__img -->
    <div class="works-item__body">
        <div class="works-item__description">
            <h3 class="works-item__title"><?php the_field('title'); ?></h3>
            <p class="works-item__time"><?php the_field('time'); ?>時間</p>
            <p class="works-item__skill"><?php the_field('skills'); ?></p>
            <p class="works-item__text"><?php the_field('description'); ?></p>
            <?php if (get_field('user_name')) : ?>
                <p class="works-item__basic">【Basic認証】<br>ユーザー名： <?php the_field('user_name'); ?><br>パスワード：<?php the_field('password'); ?></p>
            <?php endif; ?>
        </div>
        <!-- /.works-item__description -->
        <div class="works-item__btn">
            <?php if (get_field('url')) : ?>
                <?php if (($cat->category_nicename) == "lp") : ?>
                    <a href="<?php the_field('url'); ?>" class="btn btn--white" target="_blank">Web site</a>
                <?php else : ?>
                    <a href="<?php the_field('url'); ?>" class="btn btn--main" target="_blank">Web site</a>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (get_field('git')) : ?>
                <?php if (($cat->category_nicename) == "lp") : ?>
                    <a href="<?php the_field('git'); ?>" class="btn btn--white" target="_blank">Git</a>
                <?php else : ?>
                    <a href="<?php the_field('git'); ?>" class="btn btn--main" target="_blank">Git</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <!-- /.works-item__btn -->
    </div>
    <!-- /.works-item__body -->
</div>
<!-- /.works__item works-item -->