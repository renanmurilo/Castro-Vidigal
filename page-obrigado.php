<?php
// Template Name: Obrigado
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- SOLUÇÕES OBRIGADO -->

    <section class="section-obrigado">
        <div class="shell">
            <a class="btn-before" href="/contato">
                <i class="ico-arrow-blog"></i> Contato
            </a>
            
            <div class="content-obrigado">
                <h2><?php the_field('titulo'); ?></h2>
                
                <h3><?php the_field('sub-titulo'); ?></h3>

                <a class="mail" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                <p class="phone"><?php the_field('telefone'); ?></p>

                <div class="sociais">
                    <div class="ico">
                        <i class="ico-whats-red"></i>
                    </div>

                    <div class="text">
                        <p>Benefícios: <?php the_field('telefone_beneficios'); ?></p>
                        <p>Outros: <?php the_field('telefone_outros'); ?></p>
                    </div>
                </div>
            </div>

            <?php
                $args = array (
                    'post_type' => 'pessoais',
                    'order' => 'ASC',
                    'showposts' => 50,
                );
                $the_query = new WP_Query ( $args );
            ?>

            <div class="content-carousel">
                <h3><?php the_field('titulo-slide'); ?></h3>

                <div class="inner-carousel slider-obrigado">
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="box-content">
                            <a class="link-box" href="<?php the_field('link-page-box'); ?>">
                                <div class="image-box">
                                    <img src="<?php the_field('imagem-box'); ?>" alt="<?php the_field('texto-box'); ?>">
                                </div>
                                <h5><?php the_field('texto-box'); ?></h5>
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