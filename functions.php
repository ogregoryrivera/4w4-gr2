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

/*--------------------------------------Modification des choix de menu "cours" */
function personnalisation_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'cours' par l'identifiant de votre menu
    if($args->menu == 'cours') {
// Modifier la longueur du titre en fonction de vos besoins
$title = wp_trim_words($title, 3, ' ... '); //On garde uniquement trois mots pour le titre du choix
}
return $title;
}
add_filter('nav_menu_item_title', 'personnalisation_menu_item_title', 10, 4);

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() 
         && $query->is_main_query() 
         && ! is_admin() ) {
      $query->set( 'category_name', '4w4' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );