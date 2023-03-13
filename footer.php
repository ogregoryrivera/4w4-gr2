

<footer class="site__footer">

<div class="logo_footer">
    <?php the_custom_logo(); ?> 
</div>


    <section class="colonne_1">
        <p>Colonne 1</p> 
        <?php wp_nav_menu(array(
                "menu" => "lien_footer_1",
                "container" => "nav"
            )) ?> 
    </section>
    <section class="colonne_2">
        <p>Colonne 2</p> 
        <?php wp_nav_menu(array(
                "menu" => "lien_footer_2",
                "container" => "nav"
            )) ?> 
    </section>
    <section class="colonne_3">
        <p>Colonne 3</p> 
        <?php wp_nav_menu(array(
                "menu" => "lien_footer_3",
                "container" => "nav"
            )) ?> 
    </section>
</footer>

<?php wp_footer(); ?> 
</body>
</html>