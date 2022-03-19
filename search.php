<?php get_header() ?>
<main class="site__main">
    
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
       <h3>
       <?php get_permalink(); ?>    
       <?php the_title(); ?></h3> 
        <p><?php echo wp_trim_words(get_the_content(), 20, "...>"); ?></p>
        <hr>
    <?php endwhile ?>
    <?php else : ?>
        <p>aucun résultat</p>
    <?php endif ?>
</main>
<?php get_footer(); ?>