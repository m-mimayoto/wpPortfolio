<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <haed>
        <meta charset="UTF-8">
         <!--レイアウト表示-->
         <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
         <meta name="robots" content="index,follow" />
         <!--スマホサイズ-->
         <meta name="viewport" content="width=device-width; initial-scale=1;">
         <!--ファイルの読み込み-->
         <link rel="https://unpkg.com/ress/dist/ress.min.css"><!--リセット-->

         <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script><!--scrollify-->
         <!--viewpoint-->
         <meta name="viewport" content="width=device-width,initial-scale=1">
         <?php wp_head(); ?>
    </haed>
    <body <?php body_class(); ?>>
        <header class="l-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h1 class="p-header__title"><?php echo esc_html(get_bloginfo('name')); ?></h1>
            <p class="p-header__subtitle"><?php echo esc_html(get_bloginfo('description')); ?></p>
            </a>

            <!--<div class="l-header__navblock">右-->
                <!--ハンバーガーメニュー-->
                <div class="l-hamburgerbtn--close" style="display:block;">
                    <span class="l-hamburgerbtn-1"></span>
                    <span class="l-hamburgerbtn-2"></span>
                    <span class="l-hamburgerbtn-3"></span>
                </div>
                <!--ナビメニュー-->
                <?php get_sidebar(); ?>
            <!--</div>l-header__navblock-->
        </header>