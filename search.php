<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?> 
<h1>Bienvenue dans le cours 4W4</h1>

<main>
<h3>search.php</h3>
    <?php if(have_posts()):
            while(have_posts()) : the_post();
            the_title('<h4>','<h4/>');
            //the_content('<p>,<p/>'); ?>
            <p class="paragraphe__recherche">
    <?= wp_trim_words(get_the_excerpt(), 50, "..."); ?> </p>

            <hr>
    <?php endwhile;
    endif; ?>    
</main>

<?php get_footer(); ?> 