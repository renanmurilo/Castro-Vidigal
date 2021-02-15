<?php $home = get_page_by_title('Home'); ?>

<?php if (is_page('Contato')) { ?>
    <div class="space"></div>
<?php } ?>

<section class="section-contato">
    <div class="shell">
        <div class="content-contato">
            <h2><?php the_field('titulo-contato', $home) ;?></h2>
            <h3><?php the_field('sub-titulo-contato', $home) ;?></h3>

            <div class="inner-contato">
                <div class="contato">
                    <h5><?php the_field('titulo-formulario', $home) ;?></h5>

                    <?php echo do_shortcode('[contact-form-7 id="290" title="contato"]'); ?>
                </div>

                <div class="endereco">
                    <h5><?php the_field('titulo-endereco', $home) ;?></h5>
                    <p class="text-endereco"><?php the_field('texto-endereco', $home) ;?></p>

                    <div class="image-endereco">
                        <a href="<?php the_field('link-endereco', $home) ;?>" target="_blank">
                            <img class="map-desk" src="<?php the_field('link-imagem-endereco', $home) ;?>" alt="">
                            <img class="map-mobile" src="<?php the_field('link-imagem-endereco-mobile', $home) ;?>" alt="">
                        </a>
                    </div>
                    
                    <a class="btn-map" href="<?php the_field('link-endereco', $home) ;?>" target="_blank">
                        Ver no maps <i class="ico-arrow-right-red"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>