<?php
// Template Name: Soluções pessoais
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- SOLUÇÕES PESSOAIS -->

    <section class="section-pessoais">
        <div class="shell">
            <div class="content-pessoais">
                <h2><?php the_field('titulo-pessoais'); ?></h2>
                <h3><?php the_field('sub-titulo-pessoais'); ?></h3>

                <div class="body-pessoais">
                    <?php if(have_rows('pessoais')): while(have_rows('pessoais')) : the_row(); ?>
                        <div class="box-content">
                            <a class="link-box" href="<?php the_sub_field('link-page-box'); ?>">
                                <div class="image-box">
                                <img src="<?php the_sub_field('imagem-box'); ?>" alt="<?php the_sub_field('texto-box'); ?>">
                                </div>
                                <h5><?php the_sub_field('texto-box'); ?></h5>
                            </a>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLUÇÕES PESSOAIS -->

    <!-- ALGUMA DÚVIDA -->

    <?php include(TEMPLATEPATH . "/inc/duvida.php"); ?>

    <!-- ALGUMA DÚVIDA -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>