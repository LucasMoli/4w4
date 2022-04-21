<?php 
/**
 * Template Name: Évenement
 * 
 */

?>

<?php get_header() ?>
<main class="site__main">
   <article class="evenement">
      <h1>-----Template-evenement-----</h1>
      <?php if (have_posts()): the_post(); ?>
      <?php the_title() ?>
      <section class="evenement__resume">
         <?php the_field('resume'); ?>

      </section>
   </article>
   <p class="evenement__endroit">
      <?php 
/**
 * Template Name: Évenement
 * 
 */

?>

<?php get_header() ?>
<main class="site__main">
   <article class="evenement">
      <h1>-----Template-evenement-----</h1>
      <?php if (have_posts()): the_post(); ?>
     <h1> <?php the_title() ?></h1>
      <section class="evenement__resume">
         <?php the_field('resume'); ?>
      </section>
   <p class="evenement__endroit">
   <?php the_field('endroit'); ?>
   </p>
   </article>
   <?php endif ?>
</main>
<?php get_footer() ?>
   </p>
   <?php endif ?>
</main>
<?php get_footer() ?>