<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<section class="banner-single">
		<div class="content-single">
			<div class="image-single">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="" >
			</div>

			<a href="http://previewbsagency.com.br/castrovidigal/blog" class="btn-blog">
				<i class="ico-arrow-left"></i> Blog
			</a>

			<h1><?php the_title(); ?></h1>
		</div>
	</section>

	<section class="section-description">
		<div class="shell">
			<div class="inner-description">
				<h5><?php the_time('d/m/Y') ?></h5>
				<h4><?php the_author() ?></h4>
				<p><?php the_content(); ?></p>

				<div class="btn-description">
					<a href="/blog" class="btn btn-red">
						Voltar
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section-carousel">
		<div class="shell">
			<h4>Artigos que você também pode se interessar</h4>

			<div class="inner-carousel slider-single">
				<?php if ( is_single() ) {
						the_single_post();
					}
				?>
			</div>
		</div>
	</section>


<?php endwhile; else: ?>

	<section class="introducao-interna introducao-geral">
		<div class="container">
			<h1>Página não encontrada.</h1>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>