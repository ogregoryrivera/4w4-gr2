<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    wp_head();
?> 
</head>
<body class="site">
    <header class="site__header">
        <section class="site__header__logo">
        <?php the_custom_logo(); ?> 
        <div class="logomenu">
        <?php wp_nav_menu(array(
            "menu" => "entete",
            "container" => "nav"
        )) ?> 
        <?php get_search_form() ?>
        </div> 
        </section>
        
        <h1 class="site__header__h1"><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2 class="site__header__h2"><?= bloginfo('description') ?></h2>
    </header>
    <aside class="site__aside">
            <h3>menu secondaire</h3>
            <?php wp_nav_menu(array(
                "menu" => "aside",
                "container" => "nav"
            )) ?> 
    </aside>