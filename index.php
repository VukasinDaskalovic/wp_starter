<?php
get_header();
?>
    <section>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'published',
                        'posts_per_page' => -1,
                        //'cat' => array(1, 2),
                        //'order' => 'DESC',
                    );

                    $the_query = new WP_Query($args);
                    // The Loop
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                            // Do Stuff

                            ?>

                            <?php the_post_thumbnail(); ?>

                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                            <?php the_excerpt(); ?>

                            <?php the_author(); ?>

                            <?php echo get_the_date(); ?>
                        <? endwhile; endif;
                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

    </section>

<?php
get_footer();
?>