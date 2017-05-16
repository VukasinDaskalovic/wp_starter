<?php
get_header();
?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php endwhile; ?>

    <?php the_title();?>
    <?php the_post_thumbnail(); ?>
    <?php the_author();?>
    <?php the_content();?>


    <?php

endif; ?>

<?php
get_footer();
?>
