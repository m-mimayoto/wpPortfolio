<?php get_header('single'); ?>


    <main>
        <div class="l-content__waraper">
        <?php if(have_posts() ) : ?>
        <?php while(have_posts() ) : the_post(); ?>
        <section id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

            <h2 class="p-content--single__title">Works</h2>
            <h3 class="p-content--single__subtitle"><?php the_title(); ?></h3>
        </section>

            <?php the_content(); ?>
            <div class="page-links"><?php wp_link_pages(); // 記事内ページャー ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
    <?php get_footer(); ?>
