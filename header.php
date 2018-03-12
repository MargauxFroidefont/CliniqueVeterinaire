<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo( 'name' ); ?></title>

        <!-- Appel du fichier main.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

        <!--Favicon ajout -->

        <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?=get_template_directory_uri()?>/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="<?=get_template_directory_uri()?>/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
       
        <header>

          <?php
          $args=array(
              'theme_location' => 'header', // nom du slug
              'menu' => 'header_fr', // nom à donner cette occurence du menu
              'menu_class' => 'menu_header', // class à attribuer au menu
              'menu_id' => 'menu_id' // id à attribuer au menu
              // voir les autres arguments possibles sur le codex
          );
          wp_nav_menu($args);
          ?>

        <!-- 
            Tout le contenu de l entête de mon site 
        -->
        
        
        </header>
