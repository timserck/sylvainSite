<div class="posts">
<?php


$args = array(
    'posts_per_page' => 2,
    'order' => 'DESC',
      'order_by'         => 'date'
);

$the_main_loop = new WP_Query($args);

if($the_main_loop->have_posts()){
    while ($the_main_loop->have_posts()){
        $the_main_loop->the_post();
        ?>
        <article class="post" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
            <a class="post__link" href="<?php the_permalink() ?>"> </a>







                        <div class="post__description">
                            <div class="post__description--wrap">
                            <h2><?php the_title();?></h2>

                            <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                            <small><?php the_date();?></small>
                            </div>
                        </div>

 





        </article>
    <?php
    }
    ?>

        <?php the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( 'Back', 'textdomain' ),
        'next_text' => __( 'Onward', 'textdomain' ),
    ) ); ?>

<?php
}
?>

    <?php

wp_reset_query();
?>
</div>
