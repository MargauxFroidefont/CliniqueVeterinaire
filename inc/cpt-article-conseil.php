<?php

function ajout_custom_type_init() {

	$post_type = "Conseil";
	$labels = array(
		'name'               => 'Conseil',
		'singular_name'      => 'Conseil',
		'all_items'          => 'Tous les conseils',
		'add_new'            => 'Ajouter un conseil',
		'add_new_item'       => 'Ajouter un conseil',
		'edit_item'          => "Modifier le conseil",
		'new_item'           => 'Nouvel conseil',
		'view_item'          => "Voir le conseil",
		'search_items'       => 'Chercher un conseil',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Conseil parents :',
		'menu_name'          => 'Conseils',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'taxonomies'          => array('property_type'),
        'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 15,
		'menu_icon'           => 'dashicons-carrot',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => $post_type )
	);

	register_post_type($post_type, $args );

	
	$post_type = "Services";
	$labels = array(
		'name'               => 'Service',
		'singular_name'      => 'Service',
		'all_items'          => 'Tous les services',
		'add_new'            => 'Ajouter un service',
		'add_new_item'       => 'Ajouter un service',
		'edit_item'          => "Modifier le service",
		'new_item'           => 'Nouvel service',
		'view_item'          => "Voir le service",
		'search_items'       => 'Chercher un service',
		'not_found'          => 'Aucun résultat',
		'not_found_in_trash' => 'Aucun résultat',
		'parent_item_colon'  => 'Service parents :',
		'menu_name'          => 'Services',
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
        'taxonomies'          => array('property_type'),
        'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 15,
		'menu_icon'           => 'dashicons-heart',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => $post_type )
	);

	register_post_type($post_type, $args );
}

add_action( 'init', 'ajout_custom_type_init' );
