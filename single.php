<?php 
    /**
     * Modèle par défaut
     * 
     */

     get_header();
?> 
<h1>Bienvenue dans le cours 4W4</h1>

<main class="site__main">
<h3>single.php</h3>
    <?php if(have_posts()):
            while(have_posts()) : the_post();
            the_title('<h1>','<h1/>');
            the_post_thumbnail('thumbnail');
            the_content('<p>,<p/>'); ?>
            <hr>
    <?php endwhile;
    endif; ?>    
</main>

<?php get_footer(); ?> 