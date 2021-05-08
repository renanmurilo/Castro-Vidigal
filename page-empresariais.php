<?php
// Template Name: Soluções empresariais
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- SOLUÇÕES EMPRESARIAIS -->

    <?php
        $args = array (
            'post_type' => 'empresariais',
            'order' => 'ASC',
            'showposts' => 50,
        );
        $the_query = new WP_Query ( $args );
    ?>

    <section class="section-empresariais">
        <div class="shell">
            <div class="content-empresariais">
                <h2><?php the_field('titulo-empresariais'); ?></h2>
                <h3><?php the_field('sub-titulo-empresariais'); ?></h3>

                <div class="body-empresariais">

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="box-content">
                            <a class="link-box" href="<?php the_field('link-page-box'); ?>">
                                <div class="image-box">
                                <img src="<?php the_field('imagem-box'); ?>" alt="<?php the_field('texto-box'); ?>">
                                </div>
                                <h5><?php the_field('texto-box'); ?></h5>
                            </a>
                        </div>
                    <?php endwhile; else: endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- SOLUÇÕES EMPRESARIAIS -->

    <!-- ALGUMA DÚVIDA -->

    <?php include(TEMPLATEPATH . "/inc/duvida.php"); ?>

    <!-- ALGUMA DÚVIDA -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>