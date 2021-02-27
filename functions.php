<?php

// Função para registrar os Scripts e o CSS
function castro_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', [], "1.11.2", true );
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
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" >
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

?>