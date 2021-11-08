<?php get_header(); ?>

        <main>
            <div class="l-content__waraper">

                <section class="p-content--works" id="works">
                    <h3  class="p-content--works__title">Works</h3>
                    <p class="p-content--works__subtitle">制作実績</p>

                    <?php if(have_posts() ) : ?>
                    <?php while(have_posts() ) : the_post(); ?>
                    <div class="wp-flex">
                        <div class="p-content--works__flex">
                            <figure id="post-<?php the_ID(); ?>" <?php post_class('p-content--works'); ?>>
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <!--<div class="p-content--works--raisetech__mask">
                                    <figcaption class="p-content--works--raisetech__title"><? the_title(); ?><br>詳細</figcaption>
                                </div>-->
                                <? the_category(); ?>
                                </a>
                            </figure>
                        </div>
               
                         <?php endwhile; ?>
                    </div>
                </section>
                <?php endif; ?>

                <section class="p-content--skills" id="skills">
                    <h3 class="p-content--skills__title">Skills</h3>
                    <p class="p-content--skills__subtitle">使用技術</p>
                    <div class="l-content__img--skills">
                        <figure class="p-content--skills--html">
                            <img class="p-content--skills--html__img" src="<?php echo get_template_directory_uri(); ?>./img/html5-brands.svg" alt="html">
                            <figcaption class="p-content--skills--html__title">HTML</figcaption>
                        </figure>
                        <figure class="p-content--skills--css">
                            <img class="p-content--skills--css__img" src="<?php echo get_template_directory_uri(); ?>./img/css3-alt-brands.svg" alt="css">
                            <figcaption class="p-content--skills--css__title">CSS</figcaption>
                        </figure>
                        <figure class="p-content--skills--cssdesign">
                            <img class="p-content--skills--cssdesign__img" src="<?php echo get_template_directory_uri(); ?>./img/file-code-solid.svg" alt="css設計">
                            <figcaption class="p-content--skills--cssdesign__title">CSS設計</figcaption>
                        </figure>
                        <figure class="p-content--skills--sass">
                            <img class="p-content--skills--sass__img" src="<?php echo get_template_directory_uri(); ?>./img/sass-brands.svg" alt="sass">
                            <figcaption class="p-content--skills--sass__title">Sass</figcaption>
                        </figure>
                        <figure class="p-content--skills--wordpress">
                            <img class="p-content--skills--wordpress__img" src="<?php echo get_template_directory_uri(); ?>./img/wordpress-brands.svg" alt="WordPress">
                            <figcaption class="p-content--skills--wordpress__title">WordPress</figcaption>
                        </figure>
                        <figure class="p-content--skills--git">
                            <img class="p-content--skills--git__img" src="<?php echo get_template_directory_uri(); ?>./img/github-brands.svg" alt="Git/Github">
                            <figcaption class="p-content--skills--git__title">Git/Github</figcaption>
                        </figure>
                        <figure class="p-content--skills--js">
                            <img class="p-content--skills--js__img" src="<?php echo get_template_directory_uri(); ?>./img/js-brands.svg" alt="javascript(jquery)">
                            <figcaption class="p-content--skills--js__title">JavaScript<br>(jQuery)</figcaption>
                        </figure>
                    </div>
                    <section class="p-content--skills__textbox">
                        <p>コーディングでは、Sassの他、FLOCSSに準じたCSS設計を取り入れ、 効率的かつ保守性の高いコーディングを心がけています。 </p>
                        <p>PC/タブレット/スマホなどのデバイスに合わせて表示形式を変える レスポンシブ対応も行っております。</p>
                        <p>jQueryを使用して動きのあるサイト制作も可能です。</p>
                        <p>WordPressは、既存テーマのカスタマイズに加え、オリジナルのテーマ制作も承っております</p>
                    </section>
                </section>

                <section class="p-content--about" id="about">
                    <h3 class="p-content--about__title">About</h3>
                    <p class="p-content--about__subtitle">自己紹介</p>
                    <div class="l-content--about">
                        <img class="p-content--about__img"src="<?php echo get_template_directory_uri(); ?>./img/Profile.jpg" alt="自己紹介画像">
                        <section class="p-content--about__profile">
                            <p>【Profile】</p>
                            <p>名前：MIYAMOTO　MANA</p>
                            <p>居住地：埼玉県</p>
                            <p>年齢：22歳（学生）</p>
                            <p>ポートフォリオをご覧いただきありがとうございます。MANAです。学生時代、WEBデザインに興味を持ち、RaiseTechでWordPressを学びました。現在ではPhotoshopやillustratorも取り組んでいます。最近、PHPやJavaScriptも勉強中です。日々、スキル向上を目指して取り組んでおります。</p>
                        </section>
                    </div>
                </section>

                <section class="p-content--price" id="price">
                    <h3 class="p-content--price__title">Price</h3>
                    <p class="p-content--price__subtitle">料金</p>
                    <section class="p-content--pricetable">
                        <div class="p-content--pricetable--coding">
                            <h4>コーディング</h4>
                            <p>トップページ　¥15,000～</p>
                            <p>下層ページ/1頁　¥10,000～</p>
                            <p>レスポンシブ対応/1頁　¥5,000～</p>
                            <p>jQuery対応　¥10,000～</p>
                        </div>
                        <div class="p-content--pricetable--wordpress">
                            <h4>WordPress実装</h4>
                            <p>既存テーマ利用　¥50,000～</p>
                            <p>オリジナルテーマ作成　¥100,000～</p>
                        </div>
                        <div class="p-content--pricetable--note">
                            <p>※価格は全て税込表記です。</p>
                            <p>上記に記載されていない制作は、お気軽にご相談下さい。</p>
                            <p>内容ついては予告なく変更する場合がございます。 あらかじめご了承下さい。</p>
                            <p>制作のご依頼・ご相談などお気軽にお問い合わせ下さい。</p>
                        </div>
                    </section>
                </section>

                <section class="p-content--contact" id="contact">
                    <h3 class="p-content--contact__title">Contact</h3>
                    <p class="p-content--contact__subtitle">お問い合わせ</p>
                    <p class="p-content--contact__text">下記、フォームからご連絡お願い致します。<br>お待ちしております。</p>
                    <button class="c-button--contact">
                        <a href="<?php echo home_url('/contact/'); ?>"><p>お問い合わせフォーム</p></a>
                    </button>
                    <p class="p-content--contact__text">SNS・GitBashもぜひご覧ください。</p>
                    <div class="c-icon--contact">
                        <div class="c-icon--contact--twitter">
                            <a href="https://twitter.com/mm816_wed"><i class="fab fa-twitter fa-3x"></i></a>
                        </div>
                        <div class="c-icon--contact--facebook">
                            <a href="https://www.facebook.com/profile.php?id=100008407716437"><i class="fab fa-facebook fa-3x"></i></a>
                        </div>
                        <div class="c-icon--contact--github">
                            <a href="https://github.com/m-mimayoto"><i class="fab fa-github fa-3x"></i></a>
                        </div>
                    </div>
                </section>
            </div><!--l-content__waraper-->
        </main>

        <?php get_footer(); ?>