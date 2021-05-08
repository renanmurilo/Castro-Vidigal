	<?php $home = get_page_by_title('Home'); ?>

	<footer>
		<div class="logo-footer">
			<i class="ico-logo-footer"></i>
			<h3>Proteção para você, sua empresa e todos os seus bens.</h3>
			<div class="bg-footer"></div>
		</div>
		
		<div class="body-footer">
			<div class="shell">
				<div class="content-footer">
					<div class="grid">
						<h3>ENDEREÇO</h3>

						<p><?php the_field('endereco_footer', $home) ;?></p>
						<p><?php the_field('cep_footer', $home) ;?></p>
					</div>

					<div class="grid">
						<h3>ENTRE EM CONTATO</h3>

						<p><a href="mailto:contato@castroevidigal.com.br"><?php the_field('email_footer', $home) ;?></a></p>
						<p><?php the_field('telefone_footer', $home) ;?></p>

						<div class="btn-whats">
							<div class="ico">
								<i class="ico-whats-red"></i>
							</div>

							<div class="text-footer">
								<p>Benefícios: <?php the_field('telefone_beneficios_footer', $home) ;?> </p>
								<p>Outros: <?php the_field('telefone_outros_footer', $home) ;?></p>
							</div>
						</div>
					</div>

					<div class="grid">
						<h3>ACOMPANHE NOSSAS REDES SOCIAIS</h3>

						<div class="sociais">
							<a href="https://www.instagram.com/castroevidigal/ " target="_blank">
								<i class="ico-instagram-red"></i>
							</a>

							<a href="https://www.facebook.com/castroevidigal/" target="_blank">
								<i class="ico-facebook-red"></i>
							</a>

							<a href="https://www.linkedin.com/company/castroevidigal/?viewAsMember=true" target="_blank">
								<i class="ico-linkedin-red"></i>
							</a>
						</div>
					</div>

					<div class="grid">
						<h3>NÓS APOIAMOS</h3>

						<div class="apoio">
							<img class="image_1" src="<?php the_field('image_1', $home); ?>" alt="">

							<img class="image_tucca" src="<?php the_field('image_tucca', $home); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copy">
			<p><?php bloginfo('name'); ?> Todos os direitos reservados®. <a href="http://www.grupoeolica.com.br" target="_blank" rel="noopener noreferrer">Design por Eólica.</a></p>
		</div>
	</footer>

	
	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/mask/dist/jquery.mask.min.js"></script>
	<script type="text/javascript">
        $(function(){
            $('.money2').mask("#.##0,00", {reverse: true});
			$('.date').mask('00/00/0000');
			$('.cep').mask('00000-000');
			$('.phone').mask('(00) 00000-0000');
			$('.cpf').mask('000.000.000-00', {reverse: true});
			$('.rg').mask('00-000-000-0', {reverse: true});
			$('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        })
    </script>

	<script src="https://villa.segfy.com/dist/residential-bundle.js"
        data-token="<TOKEN_CORRETORA>"
        data-container="formResidencial"
        data-images-path="img/seguradoras"
        data-print-results="true"
    >
	</script>

	<script src="https://villa.segfy.com/dist/vehicle-bundle.js"
	    	data-token="<TOKEN_CORRETORA>"
	    	data-container="formAuto"
	    	data-images-path="img/seguradoras"
			data-print-results="true"
		>
	</script>

	</body>
</html>