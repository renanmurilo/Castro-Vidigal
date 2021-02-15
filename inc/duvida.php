<?php $quemsomos = get_page_by_title('Quem somos'); ?>

<?php if (is_page('Soluções pessoais')) { ?>
    <style type="text/css">
        .section-duvida {
            background-color: #f9f9f9
        }
    </style>
<?php } ?>

<?php if (is_page('Soluções empresariais')) { ?>
    <style type="text/css">
        .section-duvida {
            background-color: #f9f9f9
        }
    </style>
<?php } ?>

<section class="section-duvida">
    <div class="shell">
        <div class="content-duvida">
            <div class="box-duvida">
                <i class="ico-duvida"></i>
                
                <div class="description">
                    <h3><?php the_field('titulo-box-duvida', $quemsomos); ?></h3>
                    <p class="text-box"><?php the_field('texto-box-duvida', $quemsomos); ?></p>
                    <a href="<?php the_field('link-box-duvida', $quemsomos); ?>" class="link-btn"> Entre em contato <i class="ico-arrow-right-red"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>