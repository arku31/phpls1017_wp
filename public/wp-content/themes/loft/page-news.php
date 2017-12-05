<?php
/**
 * Template name: news
 */
get_header(); ?>

    <div class="content">
        Новости
        <?php
        $query = new WP_Query("post_type=post");

        foreach ($query->posts as $post) {
            echo "<li>".$post->post_title."</li>";
        }
        ?>


        <?php
            echo get_the_posts_pagination();
            wp_reset_postdata();
            wp_reset_query();
        ?>
        Акции
        <?php
        $query = query_posts("post_type=post");
        ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><?php the_title(); ?></li>
        <?php endwhile; else: ?>
        <p><?php _e('Ничего не найдено.'); ?></p>
        <?php endif; ?>
        <?php
        echo get_the_posts_pagination();
            wp_reset_postdata();
            wp_reset_query();
        ?>
        <h1>Оригинальный заголовок - <?php the_title(); ?></h1>
    </div>

<?php get_footer(); ?>