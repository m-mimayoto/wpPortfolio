<!DOCTYPE html>
<html lang="ja">
    <haed>
        <meta charset="UTF-8">
        <title>Portfolio-contact</title>
         <!--レイアウト表示-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
         <meta name="robots" content="index,follow" />
         <!--スマホサイズ-->
         <meta name="viewport" content="width=device-width; initial-scale=1;">
         <!--ファイルの読み込み-->
         <link rel="https://unpkg.com/ress/dist/ress.min.css"><!--リセット-->
        
         <!--viewpoint-->
         <meta name="viewport" content="width=device-width,initial-scale=1">
         <?php wp_head('single'); ?>
    </haed>
    <body <?php body_class(); ?>>
    <header class="l-header--single">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2 class="p-header__title--single">><?php bloginfo( 'name' ); ?><br><?php bloginfo( 'description' ); ?></h3></a>
        <div class="l-header__navblock"><!--右-->
            <!--ハンバーガーメニュー-->
            <div class="l-hamburgerbtn--close" style="display:block;">
                <span class="l-hamburgerbtn-1"></span>
                <span class="l-hamburgerbtn-2"></span>
                <span class="l-hamburgerbtn-3"></span>
            </div>
            <!--ナビメニュー-->
            <?php get_sidebar(); ?>
        </div><!--l-header__navblock-->
    </header>