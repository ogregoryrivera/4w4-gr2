<?php 
/**
 * Template name: Atelier
 *
 */

get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail('thumbnail'); ?> 
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p class="atelier-box">Formateur: <?php the_field('formateur'); ?></p>
<p class="atelier-box">Date de début de l’atelier: <?php the_field('date'); ?></p>     
<p class="atelier-box">Heure de début <?php the_field('heure'); ?></p>    
<p class="atelier-box">Durée du cours: <?php the_field('duree'); ?>h</p>  
<p class="atelier-box">Local ou se déroulera l’atelier: <?php the_field('local'); ?></p> 
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();