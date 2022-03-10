<?php get_header(); ?>

    <!-- not-found -->
    <section class="not-found">
        <div class="not-found__wrapper section section--not-found">
            <div class="not-found__title title">
                <h2 class="title__primary">404</h2>
            </div>
            <!-- /.not-found__title title -->
            <p class="not-found__text">ページが見つかりません</p>
            <div class="not-found__btn">
                <a href="<?php echo home_url() ?>" class="btn btn--big">ホームへ戻る</a>
            </div>
        </div>
        <!-- /.not-found__wrapper section section--not-found -->
    </section>
    <!-- /.not-found -->

<?php get_footer(); ?>