<?php get_header() ?>
<main class="site__main">

    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
    </section>

    <?php
    wp_nav_menu(array(
        'menu' => 'accueil',
        'container' => 'nav'
    ));
    ?>

    <?php
    wp_nav_menu(array(
        'menu' => 'evenement',
        'container' => 'nav'
    ));
    ?>


    <?php if (have_posts()) : the_post(); ?>
        <?php the_title() ?>

        <div class="galerie">
            <?php the_content() ?>
        </div>
    <?php endif ?>

</main>
<?php get_footer() ?>