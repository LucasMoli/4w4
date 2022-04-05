<?php get_header() ?>
<main class="site__main">
    <h1>----category-macrame.php---</main>
    <?php 
        if(have_posts()): while(have_posts()): the_post();?>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
<?php get_footer() ?>