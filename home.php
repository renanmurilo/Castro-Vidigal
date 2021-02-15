<?php get_header(); ?>

	<section class="section-blog">
		<div class="content-blog">
			<h1>Blog</h1>
			<h3>Acreditamos que o conhecimento é a chave para a tomada das melhores decisões. Acompanhe com a gente o mercado de seguros:</h3>
		</div>
	</section>

	<section class="section-destaque">
		<div class="shell">
			<div class="post-recent">
				<?php if ( is_home() ) {
						post_fixed();
					}
				?>
			</div>
		</div>
	</section>


	<section class="section-posts">
		<div class="shell">
			<div class="content-posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="grid-posts">
						<a href="<?php the_permalink(); ?>">
							<div class="image-post">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="" >
							</div>

							<div class="content-post">
								<h3><?php the_title() ?></h3>
								<h5><?php the_time('d/m/Y') ?></h5>
								<p><?php $excerpt= get_the_excerpt(); echo substr($excerpt, 0, 190,); ?>.</p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="post-navigation">
				<?php the_posts_pagination( array( 'mid_size'  =>  2) ) ?>
			</div>
			<?php else: endif; ?>
		</div>
	</section>

<?php get_footer(); ?>