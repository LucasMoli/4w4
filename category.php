<?php get_header() ?>
<main class="site__main">
    <section class="formation">
<a href="?cletri=title&ordre=asc" class="fleche__haut">
    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#7300ff"><path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
</a>
<a href="?cletri=title&ordre=desc" class="fleche__bas">
    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#7300ff"><path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
</a>
    <?php wp_nav_menu(array(
        "menu"=>"category_cours",
        "container"=>"nav")); ?>

<?php 
$slug_categorie_de_la_page = trouve_la_categorie(array('cours', 'web', 'jeu', 'design', 'utilitaire', 'video', 'creation-3d'));
$ma_categorie = get_category_by_slug($slug_categorie_de_la_page);
echo "<h2>" . $ma_categorie->name . "</h2>";
?>

        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                
                <?php 
                //if (is_category(array('cours', 'creation-3d', 'web', 'jeu', 'design', 'utilitaire', 'video'))):
                    get_template_part('gabarit/content','cours');
               // else:
                  //  get_template_part('gabarit/content','macrame');
               // endif;
                ?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>