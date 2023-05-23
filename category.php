<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?> 


<main class="site__main">
<code>category.php</code>
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      //Création d'une nouvelle requête
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <?php get_template_part('template-parts/categorie', $category->slug); 
               get_template_part('template-parts/template', $category->slug);
         ?>    
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<?php get_footer(); ?> 