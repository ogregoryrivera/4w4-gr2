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
<body class="site <?= (is_front_page()?'no-aside':''); ?>">

    <header class="site__header">
        <section class="site__header__logo">
        <div class="mon_logo">
            <?php the_custom_logo(); ?> 
            <h1 class="site__header__h1">4w4</h1>
        </div>
        
        <div class="logomenu">
        <input type="checkbox" id="chkMenu">
            <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav"
                )) ?> 
            <label class="btn__burger" for=chkMenu>
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=FFFFFF" width="32" height="32">
            </label>
            <?php get_search_form() ?>
            
            
        </div> 
        
        </section>
        
        <!-- h1 class="site__header__h1"><a href="<?=/* bloginfo('url') ?>"><?=*/ bloginfo('name') ?></a></h1 --> 
        
        
        <h2 class="site__header__h2"><?= bloginfo('description') ?></h2>
    </header>
    <?php if(! is_front_page()){
        get_template_part("template-parts/aside");
    }  ?> 