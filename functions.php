<?php

// Função para registrar os Scripts e o CSS
function castro_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery.js', [], "3.4.1", true );
	// Rigistra o plugin do slider
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', ['jquery'], false, true);
	
	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins-script'], false, true );

	// Carrega o Script	wp_enqueue_script( 'main-script' );
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'castro_scripts' );

function castro_css() {
	wp_register_style( 'castro-style', get_template_directory_uri() . '/style.css', [], false, false );

	wp_register_style('owl-carousel', get_template_directory_uri() . '/js/plugins/owl.carousel.min.css', [], false, false);

	wp_enqueue_style( 'owl-carousel' );
	wp_enqueue_style( 'castro-style' );
}
add_action( 'wp_enqueue_scripts', 'castro_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

// Habilitar imagem destacada na página de post
function ed_support_thumbnails() {
    add_theme_support('post-thumbnails'); // thumbnails
}

add_action('after_setup_theme', 'ed_support_thumbnails');

// Puxar posts
function the_single_post() {
 
    // start by setting up the query
    $query = new WP_Query( array(
        'post_type' => 'post',
		'showposts' => 10,
    ));
 
    // now check if the query has posts and if so, output their content in a banner-box div
    if ( $query->have_posts() ) { ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="grid-posts">
			<a href="<?php the_permalink(); ?>">
				<div class="image-post">
					<img src="<?php the_field('imagem-post'); ?>" alt="" >
				</div>

				<div class="content-post">
					<h3><?php the_title() ?></h3>
				</div>
			</a>
		</div>
        <?php endwhile; ?>
    <?php }
    wp_reset_postdata();
}

//Puxar um post ficado
function post_fixed() {
 
    // start by setting up the query
    $query = new WP_Query( array(
        'post_type' => 'post',
		'showposts' => 1,
		'post__in' => get_option( 'sticky_posts' )
    ));
 
    // now check if the query has posts and if so, output their content in a banner-box div
    if ( $query->have_posts() ) { ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="grid-destaque">
			<a href="<?php the_permalink(); ?>">
				<div class="image-destaque">
					<h5 class="date-mobile"><?php the_time('d/m/Y') ?></h5>
					<h4 class="text-mobile">Destaque</h4>
					<img src="<?php the_field('imagem-post'); ?>" alt="" >
				</div>

				<div class="content-destaque">
					<h5 class="date-desk"><?php the_time('d/m/Y') ?></h5>
					<h4 class="text-desk">Destaque</h4>
					<h3><?php the_title() ?></h3>
					<p><?php $excerpt= get_the_excerpt(); echo substr($excerpt, 0, 1000,); ?></p>
				</div>
			</a>
		</div>
        <?php endwhile; ?>
    <?php }
    wp_reset_postdata();
}

/**
 * Remove posts fixos.
 *
 * Remove posts fixos da consulta principal apenas na front-page e na home
 */
function teo_remove_sticky( $query = false ) {

	// Verifica se a consulta está sendo realizada na front-page ou na home
	if ( @is_front_page() || @is_home() ) { 
		// Remove os sticky posts da consulta (posts fixos)
		$query->set(
			'post__not_in',
			get_option( 'sticky_posts' )
		);
	}

} // teo_remove_sticky

// Adiciona a ação
add_action('pre_get_posts','teo_remove_sticky');


// Posts pessoais
function custom_post_type_pessoais() {
	register_post_type('pessoais', array(
		'label' => 'Pessoais',
		'description' => 'Pessoais',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'pessoais', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Pessoais',
			'singular_name' => 'Pessoais',
			'menu_name' => 'Pessoais',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Pessoais',
			'edit' => 'Editar',
			'edit_item' => 'Editar Pessoais',
			'new_item' => 'Novo Pessoais',
			'view' => 'Ver Pessoais',
			'view_item' => 'Ver Pessoais',
			'search_items' => 'Procurar Pessoais',
			'not_found' => 'Nenhum Pessoais Encontrado',
			'not_found_in_trash' => 'Nenhum Pessoais Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_pessoais');

// Posts Empresariais
function custom_post_type_empresariais() {
	register_post_type('empresariais', array(
		'label' => 'Empresariais',
		'description' => 'Empresariais',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'empresariais', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Empresariais',
			'singular_name' => 'Empresariais',
			'menu_name' => 'Empresariais',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Empresariais',
			'edit' => 'Editar',
			'edit_item' => 'Editar Empresariais',
			'new_item' => 'Novo Empresariais',
			'view' => 'Ver Empresariais',
			'view_item' => 'Ver Empresariais',
			'search_items' => 'Procurar Empresariais',
			'not_found' => 'Nenhum Empresariais Encontrado',
			'not_found_in_trash' => 'Nenhum Empresariais Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_empresariais');

?>