<?php get_header('single'); ?>

    <main>
        <div class="l-content__waraper">

        <?php if(have_posts() ) : ?>
            <?php while(have_posts() ) : the_post(); ?>
            <section id="post-<?php the_ID(); ?>" <?php post_class('p-top'); ?>>

            <h2 class="p-content--page__title"><?php the_title(); ?></h2>
            <!--<h3 class="p-content--page__subtitle"></h3>-->
            <?php the_post_thumbnail(); ?>
            </section>
            <?php the_content(); ?> 
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>

    <?php get_footer(); ?>