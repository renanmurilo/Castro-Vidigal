<?php
// Template Name: Quem somos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- BANNER QUEM SOMOS  -->
    <section class="section-banners">
        <img class="content-banners-desk" style="background-image: url('<?php the_field("banner-quemsomos-desk"); ?>');" />
        <img class="content-banners-mobile" style="background-image:url('<?php the_field("banner-quemsomos-mobile"); ?>');" />
            <div class="inner-content">
                <h1><?php the_field('titulo-banner'); ?></h1>
                <h3><?php the_field('sub-titulo-banner-one'); ?></h3>
                <h3><?php the_field('sub-titulo-banner-two'); ?></h3>
            </div>
    </section>
    <!-- BANNER QUEM SOMOS  -->

    <!-- O QUE OFERECEMOS -->

    <section class="section-servicos">
        <div class="shell">
            <div class="content-servicos">
                <h2><?php the_field('titulo-servicos'); ?></h2>
                <h4><?php the_field('sub-titulo-servicos'); ?></h4>

                <div class="inner-servicos">
                    <?php if(have_rows('servicos')): while(have_rows('servicos')) : the_row(); ?>
                        <div class="grid">
                            <img class="image-servicos" src="<?php the_sub_field('image-servicos'); ?>" alt="<?php the_sub_field('texto-servicos'); ?>">
                            <p class="text-grid"><?php the_sub_field('texto-servicos'); ?></p>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- O QUE OFERECEMOS -->

    <!-- NOSSOS PRODUTOS -->

    <section class="section-produtos">
        <div class="shell">
            <div class="content-produtos">
                <h2><?php the_field('titulo-produtos'); ?></h2>

                <div class="inner-produtos">
                    <div class="grid-produto">
                        <i class="bg-solucoes-pessoais"></i>
                        <div class="card-produto">
                            <img class="image-card-desk" src="<?php the_field('imagem-card-solucoes-pessoais-desk'); ?>" alt="<?php the_field('texto-card-solucoes-pessoais'); ?>">
                            <img class="image-card-mobile" src="<?php the_field('imagem-card-solucoes-pessoais-mobile'); ?>" alt="<?php the_field('texto-card-solucoes-pessoais'); ?>">
                            <div class="content-grid">
                                <h3><?php the_field('titulo-card-solucoes-pessoais'); ?></h3>
                                <p class="text-grid"><?php the_field('texto-card-solucoes-pessoais'); ?></p>
                                <a href="<?php the_field('link-card-solucoes-pessoais'); ?>" class="btn btn-red">Veja nossos produtos <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid-produto">
                        <div class="card-produto">
                            <img class="image-card-desk" src="<?php the_field('imagem-card-solucoes-empresariais-desk'); ?>" alt="<?php the_field('texto-card-solucoes-empresariais'); ?>">
                            <img class="image-card-mobile" src="<?php the_field('imagem-card-solucoes-empresariais-mobile'); ?>" alt="<?php the_field('texto-card-solucoes-empresariais'); ?>">
                            <div class="content-grid">
                                <h3><?php the_field('titulo-card-solucoes-empresariais'); ?></h3>
                                <p class="text-grid"><?php the_field('texto-card-solucoes-empresariais'); ?></p>
                                <a href="<?php the_field('link-card-solucoes-empresariais'); ?>" class="btn btn-red">Veja nossos produtos <i class="ico-arrow-right"></i></a>
                            </div>
                        </div>
                        <i class="bg-solucoes-empresariais"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSSOS PRODUTOS -->

    <!-- ONDE ESTAMOS -->

    <section class="section-localidade">
        <div class="shell">
            <div class="content-localidade">
                <div class="image-map">
                    <img class="mapa-desk" src="<?php the_field('imagem-mapa-desk'); ?>" alt="<?php the_field('texto-localidade'); ?>">
                    <img class="mapa-mobile" src="<?php the_field('imagem-mapa-mobile'); ?>" alt="<?php the_field('texto-localidade'); ?>">
                </div>

                <div class="description-localidade">
                    <h3><?php the_field('titulo-localidade'); ?></h3>
                    <p class="text-localidade"><?php the_field('texto-localidade'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ONDE ESTAMOS -->

    <!-- ALGUMA DÚVIDA -->

    <?php include(TEMPLATEPATH . "/inc/duvida.php"); ?>

    <!-- ALGUMA DÚVIDA -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>