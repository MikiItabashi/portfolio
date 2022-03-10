<!-- トップへ戻る -->
<a href="#" class="pageTop js-pageTop"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/arrow.png" alt="toTop"></a>

<!-- footer -->
<footer class="footer">
    <nav class="footer__nav footer-nav u-desktop">
        <ul class="footer-nav__items">
            <li class="footer-nav__item">
                <a href="<?php echo home_url() ?>" class="footer-nav__link">ホーム</a>
            </li>
            <li class="footer-nav__item">
                <a href="<?php echo home_url('/works') ?>" class="footer-nav__link">制作実績</a>
            </li>
            <li class="footer-nav__item">
                <a href="<?php echo home_url('/contact') ?>" class="footer-nav__link">お問い合わせ</a>
            </li>
        </ul>
        <!-- /.footer-nav__items -->
    </nav>
    <!-- /.footer__nav footer-nav -->
    <div class="footer__wrapper">
        <p class="footer__copy">&copy; 2021 mikiitabashi</p>
    </div>
    <!-- /.footer__wrapper -->
</footer>
<!-- /.footer -->

<?php wp_footer(); ?>
</body>

</html>