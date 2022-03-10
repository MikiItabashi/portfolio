<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

function my_enqueue_scripts()
{
    // wp_enqueue_script('jQuery');
    wp_enqueue_script('drawer', get_template_directory_uri() . '/assets/js/drawer.min.js', array('jquery'));
    wp_enqueue_script('pagescroll', get_template_directory_uri() . '/assets/js/pagescroll.min.js', array('jquery'));
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'));
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array());
    // wp_enqueue_script('drawer', get_template_directory_uri() . '/src/js/drawer.js', array('jquery'));
    // wp_enqueue_script('pagescroll', get_template_directory_uri() . '/src/js/pagescroll.js', array('jquery'));
    // wp_enqueue_script('script', get_template_directory_uri() . '/src/js/script.js', array('jquery'));
    // wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_drawer' => 'ドロワーナビ',
        'place_footer' => 'フッターナビ',
    )
);
