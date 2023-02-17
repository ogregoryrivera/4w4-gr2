<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?> 
<h1>Bienvenue dans le cours 4W4</h1>

<main>
    <h3>category.php</h3>
    <section class="blocflex">
    <?php if(have_posts()):
            while(have_posts()) : the_post(); ?>
            <article>
            <h2> <a href="<?php echo get_permalink(); ?>"> <?php echo get_the_title(); ?> </a> </h2>

            <?php //the_content(); affiche le contenu complet de l'article ?>
            <?php // the_excerpt()affiche un résumé de l'article ?>  
            <p><?= wp_trim_words(get_the_excerpt(), 10, "&#11088;"); ?></p>

            </article>
    <?php endwhile;
    endif; ?>   
    </section> 
</main>

<?php get_footer(); ?> 