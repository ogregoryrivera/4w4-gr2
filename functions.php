<?php 
    function ajouter_styles() {
    wp_enqueue_style('style-principale', //Identificateur du link css
                     get_template_directory_uri() . '/style.css', //Endroit où se trouve le fichier style.css
                     array(), //Les fichiers qui dépendant de style.css
                     filemtime(get_template_directory() . '/style.css') //Version de notre style.css
                    );

                    
                        
    }
    add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

//----------------------------------------------------Enregistrement des menus

    if ( ! function_exists( 'enregistrement_nav_menu' ) ) {

                        function enregistrement_nav_menu(){
                            register_nav_menus( array(
                                'principal' => 'Menu principal',
                                'footer'  => 'Menu pied de page'
                            ) );
                        }
                        add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
                    }        
                    
add_theme_support('title-tag');
add_theme_support('custom-logo', array('heigh' => 400,
                                       'width' => 700));
add_theme_support('post-thumbnails');
?> 