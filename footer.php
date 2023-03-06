<footer class="site__footer">
    <section class="colonne_1">
        <p>Colonne 1</p> 
        <?php wp_nav_menu(array(
                "menu" => "lien_footer_1",
                "container" => "nav"
            )) ?> 
    </section>
    <section>Colonne 2</section>
    <section>Colonne 3</section>
</footer>

<?php wp_footer(); ?> 
</body>
</html>