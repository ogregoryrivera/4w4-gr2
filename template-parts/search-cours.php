<?php 
    $titre = get_the_title();
    $sigle = substr($titre, 0,7);
    $titre_long = substr($titre,7,-5);
    $duree = substr($titre, strpos($titre,'('));
    //strpos($titre, '(') Permet de trouver la position du caractère, '('
?> 

<article class="blocflex__article">    
    <h5><?= $titre_long ?> </h5>
    <h2><a href="<?php the_permalink(); ?>"> Sigle: <?= $sigle ?></a></h2>
    
    
    <h5>Durée: <?= $duree ?> </h5>
    <p>Enseignant: <?php the_field('enseignant') ?> </p>
    <p>Domaine: <?php the_field('domaine') ?> </p>
</article>