<?php
get_header();
?>

    <section>
        <div class="container team_container">
            <div class="row">
                <div class="col-sm-12 text-center search">
                    <h2 class="section_header"><?php printf(__('Search results for: <strong> %s </strong>', 'dweb'), get_search_query()); ?></h2>
                </div>
            </div>

        </div>
    </section>

    <section id="middle" class="light_section blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>

                    <?php the_post_thumbnail(); ?>

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                    <?php the_excerpt(); ?>

                    <?php the_author(); ?>

                    <?php echo get_the_date(); ?>

                </div>

                <?php endwhile;
                endif; ?>
            </div>
        </div>
        
    </section>


<?php
get_footer();
?>