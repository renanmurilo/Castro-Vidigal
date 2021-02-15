<?php
// Template Name: Home
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- BANNERS -->

    <section class="section-banners">
        <?php if(have_rows('banners')): while(have_rows('banners')) : the_row(); ?>
            <div class="content-banners slider">
                <div class="image-content">
                    <img class="banner-desk" src="<?php the_sub_field('imagem-desk') ;?>" alt="<?php the_sub_field('texto-banner') ;?>">
                    <img class="banner-mobile" src="<?php the_sub_field('imagem-mobile') ;?>" alt="<?php the_sub_field('texto-banner') ;?>">
                    <h1><?php the_sub_field('titulo-banner') ;?></h1>
                    <h3><?php the_sub_field('texto-banner') ;?></h3>
                </div>
            </div>
        <?php endwhile; else : endif; ?>
    </section>

    <!-- BANNERS -->

    <!-- COMO PODEMOS TE AJUDAR -->

    <section class="section-ajuda">
        <div class="shell">
            <div class="content-ajuda">
                <h2><?php the_field('titulo-ajuda') ;?></h2>

                <div class="inner-ajuda">
                    <i class="bg-solucoes-pessoais"></i>
                    <div class="image-content-pessoais">
                        <img class="image-desk" src="<?php the_field('imagem-pessoais-desk') ;?>" alt="">
                        <img class="image-mobile" src="<?php the_field('imagem-pessoais-mobile') ;?>" alt="">
                    </div>

                    <div class="text-pessoais">
                        <h4><?php the_field('titulo-solucoes-pessoais') ;?></h4>
                        <p><?php the_field('texto-solucoes-pessoais') ;?></p>

                        <a href="<?php the_field('link-solucoes-pessoais') ;?>" class="btn btn-red">
                            Conheça <i class="ico-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="inner-ajuda">
                    <i class="bg-solucoes-empresariais"></i>
                    <div class="text-empresarial">
                        <h4><?php the_field('titulo-solucoes-empresariais') ;?></h4>
                        <p><?php the_field('texto-solucoes-empresariais') ;?></p>

                        <a href="<?php the_field('link-solucoes-empresariais') ;?>" class="btn btn-red">
                            Conheça <i class="ico-arrow-right"></i>
                        </a>
                    </div>

                    <div class="image-content-empresarial">
                        <img class="image-desk" src="<?php the_field('imagem-empresariais-desk') ;?>" alt="">
                        <img class="image-mobile" src="<?php the_field('imagem-empresariais-mobile') ;?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMO PODEMOS TE AJUDAR -->
    
    <!-- NOSSO DIFERENCIAL -->

    <section class="section-diferencial">
        <div class="shell">
            <div class="content-diferencial">
                <h2><i class="ico-acept"></i> <?php the_field('titulo-diferencial') ;?></h2>

                <div class="inner-diferencial">
                    <div class="description">
                        <h3><?php the_field('texto-diferencial') ;?></h3>
                        <h4 class="sub-texto"><?php the_field('texto-diferencial-vermelho') ;?></h4>
                    </div>

                    <div class="description">
                        <div class="pos-venda">
                            <div class="ico">
                                <i class="ico-pos-venda"></i>
                            </div>

                            <div class="text-pos">
                                <h4><?php the_field('texto-pos-venda-vermelho') ;?></h4>
                                <h5><?php the_field('texto-pos-venda-cinza') ;?></h5>
                            </div>
                        </div>

                        <div class="suporte">
                            <div class="ico">
                                <i class="ico-suporte"></i>
                            </div>

                            <div class="text-suporte">
                                <h4><?php the_field('texto-suporte-vermelho') ;?></h4>
                                <h5><?php the_field('texto-suporte-cinza') ;?></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-diferencial">
                    <a href="<?php the_field('link-diferencial') ;?>" class="btn btn-red">
                        Faça uma cotação <i class="ico-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSSO DIFERENCIAL -->

    <!-- POR QUE CONTRATAR UM SEGURO -->

    <section class="section-seguro">
        <div class="bg-seguro-mobile">
            <div class="shell">
                <div class="content-seguro">
                    <h2><?php the_field('titulo-seguro') ;?></h2>

                    <p class="text-seguro"><?php the_field('texto-seguro') ;?></p>

                    <a href="<?php the_field('link-seguro') ;?>" class="btn btn-red">
                        VEJA NOSSOS PRODUTOS <i class="ico-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POR QUE CONTRATAR UM SEGURO -->

    <!-- ENTRE EM CONTATO -->

    <?php include(TEMPLATEPATH . "/inc/contato.php"); ?>

    <!-- ENTRE EM CONTATO -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>