<?php get_header() ?>
<main class="site__main">

    <section class="animation">
        <div class="animation__bloc">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#7300ff"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
        </div>
        <div class="animation__bloc">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#7300ff"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
        </div>
        <div class="animation__bloc">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#7300ff"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
        </div>
    </section>
    <h1>Accueil</h1>
    <?php
    wp_nav_menu(array(
        'menu' => 'accueil',
        'container' => 'nav'
    ));
    ?>
    <h2>Événement</h2>
    <?php
    wp_nav_menu(array(
        'menu' => 'evenement',
        'container' => 'nav'
    ));
    ?>


    <?php if (have_posts()) : the_post(); ?>
       <h1><?php the_title() ?></h1> 
            <?php the_content() ?>
        
    <?php endif ?>

</main>
<?php get_footer() ?>