<?php

add_action( 'init', 'create_article_tax' );

function create_article_tax() {
	register_taxonomy(
		'categorie',
		'conseil',
		array(
			'label' => __( 'Catégorie' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
}