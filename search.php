<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?>


<main class="search__main">
<h1 class="resultat-recherche <?= (is_search()?'no-aside':''); ?>">Résultat de la recherche</h1>
        <section class="blocflex__search">
        <?php if(have_posts()):
            while(have_posts()) : the_post();
            the_title('<h4>','<h4/>');
            //the_content('<p>,<p/>'); 
            $ma_categorie = "cours";
            if(in_category('cours')){
                $ma_categorie = "cours";  }

            get_template_part('template-parts/search', $ma_categorie);
            ?>
            <p class="paragraphe__recherche">
        </section>
    
    <?= wp_trim_words(get_the_excerpt(), 50, "..."); ?> </p>
     
    


            <hr>
    <?php endwhile;
    endif; ?>    
</main>

<?php if(! is_search()){
        get_template_part("template-parts/aside");
    }  ?> 

<?php get_footer(); ?> 