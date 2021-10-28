jQuery(function(){
    jQuery('.l-hamburgerbtn--close').click(function(){
        jQuery(this).toggleClass('l-hamburgerbtn--open');/*ボタンが×に代わる*/
        jQuery('#slide').slideToggle(230);
        jQuery('.l-header__nav').toggleClass('open');
    });
});

jQuery(function(){
    jQuery('#return a[href]').on('click', function(event) {　/*ナビをクリックするとボタンとメニューが閉じる*/ 
        jQuery('.l-hamburgerbtn--close').trigger('click');
    });
});

jQuery(function() {
    jQuery.scrollify({
      section : "section",
      scrollbars:"false",//スクロールバー表示・非表示設定
      interstitialSection : "header,footer",//ヘッダーフッターを認識し、1ページスクロールさせず表示されるように設定
      easing: "swing", // 他にもlinearやeaseOutExpoといったjQueryのeasing指定可能
      scrollSpeed: 300, // スクロール時の速度
    });
  });