<?php get_header(); ?>
    <div class="main single">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="singlePost">
                    <header class="singlePost__header" >
                        <h1 class="singlePost__header--title"><?php the_title(); ?></h1>
                        <p class="singlePost__header--info">
                            Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
                        </p>
                    </header>
                    <div class="singlePost__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-comments">
                        <?php comments_template(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>