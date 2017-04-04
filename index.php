<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo get_bloginfo('title') ?></title>

		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/swiper.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">

		

		<?php wp_head(); ?>


	</head>

<body <?php body_class() ?>>

<header id="top-site">
	<div class="container">
		<a href="#"><h1 title="Maximus Residence">Maximus Residence</h1></a>
		<nav>
			<ul>
				<li><a href="#call-1">O Empreendimento</a></li>
				<li><a href="#row-map">Localização</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul>
			<a href="#contato" class="special-link">Reserve sua unidade</a>
		</nav>
		<span class="open-menu"><i class="fa fa-bars" aria-hidden="true"></i></span>
	</div>
</header>
<main id="content-site">
	<section id="home-slide" class="bgParallax" data-speed="10">
		<div class="container">
			<div class="content-box col-md-5 col-xs-12">
				<header>
					<h3><span>100%</span>das obras concluídas</h3>
					<div class="clearfix"></div>
					<h2>Maximus Pindamonhangaba</h2>
					<p>Interessado? Preencha o formulário abaixo e nós ligamos para você!</p>
				</header>
				<form name="formcontato" method="post" action="<?php bloginfo('template_url') ?>/send.php" class="form">
					<p><input type="text" name="nome" placeholder="Nome" required></p>
					<p><input type="text" name="email" placeholder="E-mail" required></p>
					<p><input type="text" name="tel" placeholder="Telefone / Celular" required></p>
					<p><select name="conhecimento">
						<option value="" disabled selected>Onde tomou conhecimento do empreendimento?</option>
						<option value="Google">Google</option>
						<option value="Facebook">Facebook</option>
						<option value="Email Marketing">E-mail Marketing</option>
						<option value="Indicação de Amigo">Indicação de Amigo</option>
						<option value="Imobiliária">Recebi contato da Imobiliária</option>
						<option value="Panfleto">Panfleto</option>
						<option value="Revista/Jornal">Anúncio em Revista/Jornal</option>
						<option value="Viu o empreendimento e fez contato">Passei em frente o empreendimento e fiz contato com a imobiliária</option>
					</select></p>
					<input type="submit" class="pull-right" name="enviar" value="enviar">
				</form>
			</div>
		</div>
	</section>

	<section id="call-1">
		<div class="container">
			<div class="row">
				<article class="col-md-10">
					<div class="row">
						<div class="col-md-12">

							<h2>

							<?php $post_id = 4; 
							$queried_post = get_post($post_id);
							$title = $queried_post->post_title;
							// exibe titulo echo $title;?>
							<?php echo $queried_post->post_content ?>

							</h2>
							

						</div>
						<div class="col-md-8">
							<a href="<?php bloginfo('template_url') ?>/img/galeria/2.jpg" data-fancybox-group="gallery2" class="fancybox">
							<img src="<?php bloginfo('template_url'); ?>/img/small-2.jpg" alt="Maximus Residence" title="Maximus Residence">
							</a>
						</div>
						<div class="col-md-4">
							<ul>
								<li>
								<a href="<?php bloginfo('template_url'); ?>/img/planta/planta_01.jpg" data-fancybox-group="gallery1" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/planta/planta_01.jpg"></a>
								</li>
								<a href="#contato" class="like-imovel">
									<li>
										<p><i class="fa fa-phone fa-4x" aria-hidden="true"></i></p>
										<p>Gostou do imóvel? Nós ligamos para você!</p>
									</li>
								</a>
							</ul>
						</div>
					</strong>

				</article>
			</div>
	
			<a href="#row1" class="btn-site">Saiba mais</a>

		</div>
	</section>

	<section id="row1">
		<div class="container">
			<div class="row">
				<article class="content-box col-md-4">

					<?php $post_id = 8; 
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title; ?>
					<h4>Sala</h4>
					<p><?php echo $queried_post->post_content ?></p>
					<a href="#row2" class="btn-site">Saiba mais</a>

				</article>
			</div>
		</div>
	</section>

	<section id="row2">
		<div class="container">
			<div class="row">
				<article class="content-box col-md-4">

					<?php $post_id = 10; 
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title; ?>
					<h4>Espaço Zen</h4>
					<h3>O máximo em sofisticação</h3>
					<p><?php echo $queried_post->post_content ?></p>
					<a href="#row3" class="btn-site">Saiba mais</a>
				</article>
			</div>
		</div>
	</section>
	
	<section id="row3">
		<div class="container">
			<div class="row">
				<article class="content-box col-md-4">

					<?php $post_id = 13; 
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title; ?>
					<h4>Piscinas</h4>
					<h3>O máximo em lazer</h3>
					<p><?php echo $queried_post->post_content ?></p>
					<a href="#row-map" class="btn-site">Saiba mais</a>

				</article>
			</div>
		</div>
	</section>

	<section id="row-map">
		<div class="container">
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d918.6867620636135!2d-45.459409!3d-22.922699!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccf03b226c33b5%3A0x868e2019ecdfa81f!2sR.+Mal.+Deodoro+da+Fonseca%2C+80+-+Jardim+Boa+Vista%2C+Pindamonhangaba+-+SP%2C+12401-010%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1477674529137" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<article class="content-box col-md-4 col-xs-12">

			<h3>
				<?php $post_id = 15; 
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				 echo $title;?>
			</h3>

			<?php echo $queried_post->post_content ?>
				
			</article>
		</div>
	</section>

	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="box-form col-md-7">
					<header>
						<h3><strong>Plantão de Vendas</strong></h3>
						<h4>Interessado? Preencha o formulário abaixo e nós ligamos para você!</h4>	
					</header>

					<form name="formcontato2" method="post" action="<?php bloginfo('template_url') ?>/send.php" class="form">
						<p><input type="text" name="nome" placeholder="Nome" required></p>
						<p><input type="text" name="email" placeholder="E-mail" required></p>
						<p><input type="text" name="tel" placeholder="Telefone / Celular" required></p>
						<p><select name="conhecimento">
							<option value="" disabled selected>Onde tomou conhecimento do empreendimento?</option>
							<option value="Google">Google</option>
							<option value="Facebook">Facebook</option>
							<option value="Email Marketing">E-mail Marketing</option>
							<option value="Indicação de Amigo">Indicação de Amigo</option>
							<option value="Imobiliária">Recebi contato da Imobiliária</option>
							<option value="Panfleto">Panfleto</option>
							<option value="Revista/Jornal">Anúncio em Revista/Jornal</option>
							<option value="Viu o empreendimento e fez contato">Passei em frente o empreendimento e fiz contato com a imobiliária</option>
						</select></p>
						<p><input type="submit" class="pull-right" name="enviar" value="enviar"></p>
					</form>
					
				</div>
			</div>
		</div>
	</section>

	<footer id="site">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div style="margin: 0 auto;">
						<img src="<?php bloginfo('template_url'); ?>/img/eko_logo.png" alt="Eko - Construindo para você" title="Eko - Construindo para você" width="150">
					</div>
				</div>
				<div class="col-md-4">
					<p style="font-size: 14px; margin-top: 30px;">Perspectivas Artísticas. Material preliminar sujeito a alteração. Todas as imagens apresentadas neste site são meramente ilustrativas.</p>
				</div>
				<div class="col-md-5">
					<div style="text-align: center;"><p>Arquitetura</p></div>
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/img/kobbaz-logo.png" alt="Kobbaz Projeto e Construção" title="Kobbaz Projeto e Construção"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/img/andre-logo.png" alt="André Peres Arquiteto" title="André Peres Arquiteto"></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</main>

<section id="form-lightbox">
	<div class="container">
		<div class="row">
			<div class="box-form col-md-7">
				<header>
					<h3><strong>Plantão de Vendas</strong></h3>
					<h4>Interessado? Preencha o formulário abaixo e nós ligamos para você!</h4>	
				</header>

				<form name="formcontato3" method="post" action="<?php bloginfo('template_url') ?>/send.php" onSubmit="return validaForm();" class="form">
					<p><input type="text" name="nome" placeholder="Nome" required></p>
					<p><input type="text" name="email" placeholder="E-mail" required></p>
					<p><input type="text" name="tel" placeholder="Telefone / Celular" required></p>
					<p><select name="conhecimento">
						<option value="" disabled selected>Onde tomou conhecimento do empreendimento?</option>
						<option value="Google">Google</option>
						<option value="Facebook">Facebook</option>
						<option value="Email Marketing">E-mail Marketing</option>
						<option value="Indicação de Amigo">Indicação de Amigo</option>
						<option value="Imobiliária">Recebi contato da Imobiliária</option>
						<option value="Panfleto">Panfleto</option>
						<option value="Revista/Jornal">Anúncio em Revista/Jornal</option>
						<option value="Viu o empreendimento e fez contato">Passei em frente o empreendimento e fiz contato com a imobiliária</option>
					</select></p>
					<p><input type="submit" class="pull-right" name="enviar" value="enviar"></p>
					<div class="clearfix"></div>
				</form>


				<span class="close close-lightbox">X</span>
				
			</div>
		</div>
	</div>
</section>


<div class="galery-hide1" style="display: none;">
	<a href="<?php bloginfo('template_url'); ?>/img/planta/planta_02.jpg" data-fancybox-group="gallery1" class="fancybox"><img src="<?php bloginfo('template_url'); ?>/img/planta/planta_02.jpg"></a>
</div>

<div class="galery-hide2" style="display: none;">
	<a href="<?php bloginfo('template_url') ?>/img/galeria/1.jpg" data-fancybox-group="gallery2" class="fancybox"></a>
	<a href="<?php bloginfo('template_url') ?>/img/galeria/3.jpg" data-fancybox-group="gallery2" class="fancybox"></a>
	<a href="<?php bloginfo('template_url') ?>/img/galeria/4.jpg" data-fancybox-group="gallery2" class="fancybox"></a>
	<a href="<?php bloginfo('template_url') ?>/img/galeria/5.jpg" data-fancybox-group="gallery2" class="fancybox"></a>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/swiper.jquery.min.js"></script>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86845897-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Início do script Omnize --> 
<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
<!-- Fim do script Omnize -->

<!--galery-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fb/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fb/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/fb/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/fb/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fb/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fb/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fb/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
	$(document).ready(function() {

			$('.fancybox').fancybox({
				padding: 10,
				helpers: {
				overlay: {
						locked: false
					}
				}
			});

	});
</script>

<script type="text/javascript">	
	//Scroll para ID's
	$(function(){
		$('#top-site a h1, #top-site nav ul li a, a.special-link ,.btn-site, .like-imovel').click(function(e){
			$.scrollTo( this.hash || 0, 500);
		});
	});
</script>

<script type="text/javascript">
	//Aparece lightbox ao tentar sair do documento
	$(document).ready(function(){
		$(document).one("mouseleave",function(){
			$('#form-lightbox').fadeIn("fast");
		});
	});
</script>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>  

<!--form 1-->
<script type="text/javascript">
    var meus_campos = {
        'nome': 'nome',
        'email': 'email',
        'tel': 'telefone',
        'conhecimento': 'Conhecimento'
     };
    options = { fieldMapping: meus_campos };
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Contato - Maximus 1', options); //Form 1
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Maximus - Contato 2', options); //Form 2       
    RdIntegration.integrate('5bc74d9a15dc71ab1bd0bc162ae544d5', 'Maximus - Contato 3', options); //Form 3

</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>