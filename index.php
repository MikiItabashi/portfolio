<?php get_header(); ?>

<!-- top -->
<section class="top">
    <div class="top__wrapper section section--top">
        <div class="top__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/miki-photo.jpg" alt="Portfolio" width="429" height="471">
        </div>
        <!-- /.top__img -->
        <div class="top__lead">
            <p class="top__text top__text--hello">Hello!</p>
            <p class="top__text top__text--name">I am <span>Miki Itabashi</span></p>
            <p class="top__text top__text--profile u-small">ITコンサル出身の</p>
            <p class="top__text top__text--profile u-small">WEB制作フリーランスです</p>
            <p class="top__text top__text--profile u-big">ITコンサル出身のWEB制作フリーランスです</p>
        </div>
        <!-- /.top__lead -->
    </div>
    <!-- /.top__wrapper section section--top -->
</section>
<!-- /.top -->

<!-- service -->
<section class="service">
    <div class="service__wrapper section section--service">
        <div class="service__title title">
            <h2 class="title__primary">Service</h2>
            <p class="title__secondary">サービス</p>
        </div>
        <!-- /.service__title title -->
        <div class="service__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/illustration.png" alt="service-img" width="679" height="364">
        </div>
        <!-- /.service__img -->
        <div class="service__body">
            <div class="service__items">
                <div class="service__item card">
                    <h3 class="card__title">ランディングページ制作</h3>
                    <div class="card__body">
                        <p class="card__text">コーディングでスマホやタブレットにも対応したWebページを制作いたします。<br>JavaScriptを用いた動きのある実装もお任せください。</p>
                        <p class="card__price">￥30,000円〜</p>
                    </div>
                    <!-- /.card__body -->
                </div>
                <!-- /.service__item card -->
                <div class="service__item card">
                    <h3 class="card__title">WordPress制作</h3>
                    <div class="card__body">
                        <p class="card__text">WordPressのテーマカスタマイズ、自作テーマの作成を行います。</p>
                        <p class="card__price">￥50,000円〜</p>
                    </div>
                    <!-- /.card__body -->
                </div>
                <!-- /.service__item card -->
            </div>
            <!-- /.service__items -->
        </div>
        <!-- /.service__body -->
        <div class="service__btn">
            <a href="<?php echo home_url('/works') ?>" class="btn">実績を見る</a>
        </div>
        <!-- /.service__btn -->
    </div>
    <!-- /.service__wrapper section section--service -->
</section>
<!-- /.service -->

<!-- about -->
<section class="about">
    <!-- 背景の切り替えを波にする -->
    <div class="about__wave wave">
        <svg class="wave__svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="wave-fill"></path>
        </svg>
    </div>
    <!-- /.about__wave -->
    <div class="about__wrapper section section--about">
        <div class="about__title title">
            <h2 class="title__primary">About</h2>
            <p class="title__secondary">私について</p>
        </div>
        <!-- /.about__title title -->
        <p class="about__lead">板橋みきと申します。<br>デザインをもとにしたコーディング業務を行っております。誰かが一歩を踏み出すきっかけになるようなWebページを作りたいです。どうぞお気軽にご連絡ください。</p>
        <div class="about__items">
            <div class="about__item about-item">
                <div class="about-item__head">
                    <p class="about-item__num about-item__num--blue">01</p>
                    <h3 class="about-item__title">経歴</h3>
                </div>
                <!-- /.about-item__head -->
                <div class="about-item__body history">
                    <ul class="history__items">
                        <li class="history__item">
                            <p class="history__date">2018.03</p>
                            <p class="history__text">上智大学理工学部　卒業</p>
                        </li>
                        <!-- /.history__item -->
                        <li class="history__item">
                            <p class="history__date">2018.06</p>
                            <p class="history__text">アクセンチュア株式会社 入社<br>システムの要件定義、<br class="u-desktop"><span>設計、開発、テストを担当</span></p>
                        </li>
                        <!-- /.history__item -->
                        <li class="history__item">
                            <p class="history__date">2021.04</p>
                            <p class="history__text"> </p>
                        </li>
                        <!-- /.history__item -->
                        <li class="history__item">
                            <p class="history__date">2021.05</p>
                            <p class="history__text"><span>Web制作フリーランス</span><span>として活動中</span></p>
                        </li>
                        <!-- /.history__item -->
                    </ul>
                    <!-- /.history__items -->
                    <span class="history__item-after"></span>
                </div>
                <!-- /.about-item__body history -->
            </div>
            <!-- /.about__item about-item -->
            <div class="about__item about-item">
                <div class="about-item__head">
                    <p class="about-item__num about-item__num--red">02</p>
                    <h3 class="about-item__title">スキル</h3>
                </div>
                <!-- /.about-item__head -->
                <div class="about-item__body skill">
                    <div class="skill__items">
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/HTML.png" alt="HTML">
                            </div>
                            <p class="skill__name">HTML</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/CSS.png" alt="CSS">
                            </div>
                            <p class="skill__name">CSS</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/Java.png" alt="JavaScript">
                            </div>
                            <p class="skill__name">JavaScript</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/php.png" alt="PHP">
                            </div>
                            <p class="skill__name">PHP</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill//SQL.png" alt="SQL">
                            </div>
                            <p class="skill__name">SQL</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/wordpress.png" alt="WordPress">
                            </div>
                            <p class="skill__name">WordPress</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/Gulp.png" alt="Gulp">
                            </div>
                            <p class="skill__name">Gulp</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/ExcelVBA.png" alt="Excel">
                            </div>
                            <p class="skill__name">Excel VBA</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/sass.png" alt="Sass">
                            </div>
                            <p class="skill__name">Sass</p>
                        </div>
                        <!-- /.skill__item -->
                        <div class="skill__item">
                            <div class="skill__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/skill/git.png" alt="Git">
                            </div>
                            <p class="skill__name">Git</p>
                        </div>
                        <!-- /.skill__item -->
                    </div>
                    <!-- /.skill__items -->
                    <p class="skill__text">その他：<br class="u-mobile">EJSなど</p>
                </div>
                <!-- /.about-item__body skill -->
            </div>
            <!-- /.about__item about-item -->
            <div class="about__item about-item">
                <div class="about-item__head">
                    <p class="about-item__num about-item__num--blue">03</p>
                    <h3 class="about-item__title">稼働状況</h3>
                </div>
                <!-- /.about-item__head -->
                <div class="about-item__body time">
                    <dl class="time__items">
                        <div class="time__item">
                            <dt class="time__list">活動拠点</dt>
                            <dd class="time__description">東京</dd>
                        </div>
                        <!-- /.time__item -->
                        <div class="time__item">
                            <dt class="time__list">稼働時間</dt>
                            <dd class="time__description">平日10:00～18:00</dd>
                        </div>
                        <!-- /.time__item -->
                    </dl>
                    <!-- /.time__body -->
                    <p class="time__text">上記の時間以外にも柔軟に対応させていただきますので、ご相談ください。</p>
                </div>
                <!-- /.about-item__body time -->
            </div>
            <!-- /.about__item about-item -->
            <div class="about__item about-item">
                <div class="about-item__head">
                    <p class="about-item__num about-item__num--red">04</p>
                    <h3 class="about-item__title">趣味</h3>
                </div>
                <!-- /.about-item__head -->
                <div class="about-item__body hobby">
                    <div class="hobby__items">
                        <div class="hobby__item">
                            <div class="hobby__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/hobby/piano.png" alt="piano">
                            </div>
                            <!-- /.hobby__img -->
                            <p class="hobby__name">ピアノ<br>エレクトーン</p>
                        </div>
                        <!-- /.hobby__item -->
                        <div class="hobby__item">
                            <div class="hobby__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/hobby/tennis.png" alt="tennis">
                            </div>
                            <!-- /.hobby__img -->
                            <p class="hobby__name">テニス</p>
                        </div>
                        <!-- /.hobby__item -->
                        <div class="hobby__item">
                            <div class="hobby__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/hobby/run.png" alt="run">
                            </div>
                            <!-- /.hobby__img -->
                            <p class="hobby__name">ランニング</p>
                        </div>
                        <!-- /.hobby__item -->
                        <div class="hobby__item">
                            <div class="hobby__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/hobby/book.png" alt="book">
                            </div>
                            <!-- /.hobby__img -->
                            <p class="hobby__name">読書</p>
                        </div>
                        <!-- /.hobby__item -->
                        <div class="hobby__item">
                            <div class="hobby__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/hobby/bag.png" alt="bag">
                            </div>
                            <!-- /.hobby__img -->
                            <p class="hobby__name">旅行</p>
                        </div>
                        <!-- /.hobby__item -->
                    </div>
                    <!-- /.hobby__items -->
                </div>
                <!-- /.about-item__body hobby -->
            </div>
            <!-- /.about__item about-item -->
        </div>
        <!-- /.about__items -->
    </div>
    <!-- /.about__wrapper section section--about -->
</section>
<!-- /.about -->

<?php get_footer(); ?>