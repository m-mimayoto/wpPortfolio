<footer class="l-footer">
           <nav class="l-footer__nav">
           <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer_nav',
                'container' => 'nav',
                'container_class' => 'nav',
                'menu_class' => 'nav_item',
            ));
        ?>
           </nav>
           <p class="p-footer__copyright">Copyright © WEB Design MANA.jp</p>
        </footer>
        <?php wp_footer(); ?>
        </body>
    </html>