<?php
define( 'THEME_PATH' ,          get_template_directory()            );
//define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/assets/style'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/assets/images'       );
define( 'JS_URL' ,              THEME_URL .    '/assets/scripts'      );
//define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
//define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;

}


/*******************************************************************
GESTION DE LA FEUILLE DE STYLE 
*******************************************************************/

add_filter('stylesheet_directory_uri','gkp_stylesheet_directory_uri', 10, 2);
function gkp_stylesheet_directory_uri($stylesheet_dir_uri, $stylesheet) {

    // On ajoute notre dossier
    return $stylesheet_dir_uri.'/assets/style';

}

add_filter('stylesheet_uri', 'gkp_stylesheet_uri', 10, 2);
function gkp_stylesheet_uri($stylesheet_uri, $stylesheet_dir_uri) {

    // On change le nom du fichier
    return $stylesheet_dir_uri.'/main.css';

}

add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
    wp_enqueue_style( 'style' );
}


/*******************************************************************
MENU
*******************************************************************/



add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
  register_nav_menu( 'footer', 'Menu bas de page' );
  register_nav_menu( 'topBar', 'Menu top Bar' );
}




?>