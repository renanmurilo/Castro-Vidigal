<?php
// Template Name: Obrigado
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- SOLUÇÕES OBRIGADO -->

    <section class="section-obrigado">
        <div class="shell">
            <a class="btn-before" href="http://previewbsagency.com.br/castrovidigal/contato">
                <i class="ico-arrow-blog"></i> Contato
            </a>
            
            <div class="content-obrigado">
                <h2><?php the_field('titulo'); ?></h2>
                
                <h3><?php the_field('sub-titulo'); ?></h3>

                <a class="mail" href="mailto:contato@castroevidigal.com.br">contato@castroevidigal.com.br</a>
                <a class="phone" href="tel:+551130513132">(11) 3051-3132</a>

                <div class="sociais">
                    <div class="ico">
                        <i class="ico-whats-red"></i>
                    </div>

                    <div class="text">
                        <p>Benefícios: <a href="tel:+5511974795197">+ 55 11 97479.5197</a></p>
                        <p>Outros: <a href="tel:+5511996470043">+ 55 11 99647.0043</a></p>
                    </div>
                </div>
            </div>

            <div class="content-carousel">
                <h3><?php the_field('titulo-slide'); ?></h3>

                <div class="inner-carousel slider-obrigado">
                    <?php if(have_rows('obrigado-slide')): while(have_rows('obrigado-slide')) : the_row(); ?>
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

    <!-- SOLUÇÕES OBRIGADO -->


<?php endwhile; else: endif; ?>

<?php get_footer(); ?>