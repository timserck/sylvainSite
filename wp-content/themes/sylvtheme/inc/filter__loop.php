<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
    <?php
    if( $terms = get_terms( 'category', 'orderby=name' ) ) :
        echo '<select name="categoryfilter"><option>Select category...</option>';
        foreach ( $terms as $term ) :
            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
        endforeach;
        echo '</select>';
    endif;
    ?>
    <label>
        <input type="radio" name="date" value="ASC" /> Date: Ascending
    </label>
    <label>
        <input type="radio" name="date" value="DESC" selected="selected" /> Date: Descending
    </label>
    <button>Apply filters</button>
    <input type="hidden" name="action" value="customfilter">
</form>
<div id="response"></div>


<div class="posts">
    
    <?php



    $args = array(
        'posts_per_page' => 2,
        'order' => 'DESC'
    );

    $the_main_filter__loop = new WP_Query($args);

    if($the_main_filter__loop->have_posts()){
        while ($the_main_filter__loop->have_posts()){
            $the_main_filter__loop->the_post();
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
        <div class="nav-previous alignleft"><?php next_post_link( '<strong>%link</strong>' ); ?></div>
        <div class="nav-next alignright"><?php previous_post_link( '<strong>%link</strong>' ); ?></div>
        <?php
    }
    ?>

    <?php

    wp_reset_query();
    ?>
</div>