<?php
// Template Name: Single Empresariais
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="section__banner__forms">
        <div class="content__banner">
			<div class="image__banner" style="background: url('<?php the_field('banner_imagem_empresariais'); ?>') center no-repeat; background-size:cover;height:343px;width:100%;">
                <h1><?php the_field('texto_banner_empresariais'); ?></h1>
                <h3><?php the_field('sub_texto_banner_empresariais'); ?></h3>
			</div>

            <div class="image__banner__mobile" style="background: url('<?php the_field('banner_imagem_empresariais__mobile'); ?>') center no-repeat; background-size:cover;height:343px;width:100%;">
                <h1><?php the_field('texto_banner_empresariais'); ?></h1>
                <h3><?php the_field('sub_texto_banner_empresariais'); ?></h3>
            </div>

			<a href="/solucoes-empresariais" class="btn__before">
				<i class="ico-arrow-left"></i> Soluções empresariais
			</a>
		</div>
    </section>
    
    <section class="content__cotacao">
        <div class="shell">
            <h2>FAÇA A SUA COTAÇÃO</h2>
            <div class="inner__cotacao">
                <h3>você já tem uma apólice desse seguro?</h3>
                <h4>Se sim, anexe o documento, caso contrário, preencha o nosso questionário:</h4>

                <div class="buttons__cotacao">
                    <a href="#" id="apolice" class="btn btn-red">
                        ANEXAR APÓLICE
                    </a>

                    <a href="#" id="questionario" class="btn btn-red">
                        PREENCHER QUESTIONÁRIO
                    </a>
                </div>
            </div>

            <div class="content__apolice">
                <h3>PREENCHA OS DADOS ABAIXO PARA ENVIAR SUA APÓLICE</h3>
                <h4>Todos os campos assinalados com * são de preenchimento obrigatório.</h4>

                <div class="inner__apolice">
                    <?php echo do_shortcode( get_field('formulario_apolice') ); ?>
                </div>
            </div>

            <div class="content__questionario" data-group="step">
                <h3>PASSO A PASSO</h3>

                <div class="step__view">
                    <div class="step__one" id="step__<?php the_field('primeiro_numero_step'); ?>">
                        <a href="#stepOne" data-click="stepOne" class="circle__one">
                            <?php the_field('primeiro_numero_step'); ?>
                        </a>
                        
                        <p class="text"><?php the_field('primeiro_texto_step'); ?></p>
                    </div>

                    <div class="step__two margin" id="step__<?php the_field('segundo_numero_step'); ?>">
                        <a href="#stepTwo" data-click="stepTwo" class="circle__two margin">
                            <?php the_field('segundo_numero_step'); ?>
                        </a>
                        
                        <p class="text"><?php the_field('segundo_texto_step'); ?></p>
                    </div>
                    
                    <div class="step__three margin" id="step__<?php the_field('terceiro_numero_step'); ?>">
                        <a href="#stepThree" data-click="stepThree" class="circle__three">
                            <?php the_field('terceiro_numero_step'); ?>
                        </a>
                        
                        <p class="text"><?php the_field('terceiro_texto_step'); ?></p>
                    </div>

                    <div class="step__four margin" id="step__<?php the_field('quarto_numero_step'); ?>">
                        <a href="#stepFour" data-click="stepFour" class="circle__four">
                            <?php the_field('quarto_numero_step'); ?>
                        </a>
                        
                        <p class="text"><?php the_field('quarto_texto_step'); ?></p>
                    </div>
                </div>

                <div class="inner__questionario">
                    <?php echo do_shortcode( get_field('formulario_de_contato') ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section__sucess">
        <div class="shell">
            <div class="content__sucess">
                <h3><?php the_field('title_sucess'); ?></h3>

                <h4><?php the_field('sub_title_sucess'); ?></h4>

                <p class="mail"><?php the_field('email_sucess'); ?></p>
                <p class="phone"><?php the_field('telefone_sucess'); ?></p>

                <div class="sociais">
                    <div class="ico">
                        <i class="ico-whats-red"></i>
                    </div>

                    <div class="text">
                        <p>Benefícios: <?php the_field('telefone_beneficios_sucess'); ?></p>
                        <p>Outros: <?php the_field('telefone_outros_sucess'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php
        $args = array (
            'post_type' => 'empresariais',
            'order' => 'ASC',
            'showposts' => 50,
            'post__not_in'  => array( $post->ID ),
        );
        $the_query = new WP_Query ( $args );
    ?>

    <section class="section-obrigado">

            <div class="content-carousel">
                <h3>PRODUTOS QUE VOCÊ TAMBÉM PODE SE INTERESSAR</h3>

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
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>