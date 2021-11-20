<?php
    //add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');//アイキャッチ画像
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "wp-block-styles" ) ;//(themecheck)
    add_theme_support( "responsive-embeds" );//(themechek)
    add_theme_support( "custom-logo");//(themecheck)
    add_theme_support( "align-wide" );//(themecheck)
    add_theme_support( "custom-background");//(themecheck)
    add_theme_support( 'custom-header' );//(themecheck)

    register_nav_menus( array(
        'footer_nav' => esc_html__('footer navigation','portfolio'),
    ));


   function portfolio_script() {
        wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), 'v5.6.1' );
        wp_enqueue_style( 'portfolio', get_template_directory_uri() . '/css/portfolio.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/move.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts' , 'portfolio_script' );

    function wpdocs_theme_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
    


    function portfolio_title( $title ) {
        if ( is_front_page() && is_home() ) { //表示されたページがフロントページかつメインページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはブログのサイト名にしてください
        } elseif ( is_singular() ) { //表示されたページが個別投稿ページなら
            $title = single_post_title( '', false ); //タイトルは投稿記事のタイトルにしてください
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'portfolio_title' ); //