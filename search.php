<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?>


<main class="search__main">
<h1 class="resultat-recherche">Résultat de la recherche</h1>
        <section class="blocflex__search">
        <?php if(have_posts()):
            while(have_posts()) : the_post();
            //the_content('<p>,<p/>'); 
            $ma_categorie = "cours";
            if(in_category('cours')){
                $ma_categorie = "cours";  
            }else if(in_category('4w4')){
                $ma_categorie = "4w4";
            }

            

            get_template_part('template-parts/search', $ma_categorie);
            ?>
            
            <p class="paragraphe__recherche">
            
            
        </section>
    
    <?= wp_trim_words(get_the_excerpt(), 50, "..."); ?> </p>
     
    


            <hr>
    <?php endwhile;
    endif; ?>    
</main>



<?php get_footer(); ?> 