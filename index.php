<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 * 
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die; 

JLoader::import('joomla.filesystem.file');

JHtml::_('behavior.framework', true);

$doc            = JFactory::getDocument();
$app            = JFactory::getApplication();
$config         = JFactory::getConfig();
$jinput         = JFactory::getApplication()->input;
$option         = $jinput->get('option', '', 'cmd');


$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/font-awesome.min.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/main.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/style.css', $type = 'text/css', $media = 'screen,projection');

JHtml::_('bootstrap.framework');

//$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.dropotron.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/skel.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/skel-viewport.min.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/util.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/main.js', 'text/javascript');

$this->setGenerator(null);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<jdoc:include type="head" />

		<!--[if lte IE 8]>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/js/ie/html5shiv.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/css/ie8.css" />
		<![endif]-->

	</head>
	<?php

		$classPage = strtolower($this->title);
		switch ($classPage) {
			case 'home':
				$classPage = 'homepage';
				break;
			case 'fotos':
				$classPage = 'no-sidebar';
				break;
			case 'contato':
				$classPage = 'no-sidebar';
			default:
				$classPage = 'left-sidebar';
				break;
		}

	 ?>
	<body class="<?php echo $classPage ?>">

		<?php $classPage = strtolower($this->title); ?>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo 
							<h1><a href="index.html">Pousada da Praia de Bombinhas</a></h1> -->
						<!-- Nav -->
							<nav id="nav">
								<h1 class="logo"></h1>
								<jdoc:include type="modules" name="menu-principal" />
							</nav>

							<?php if($classPage == 'home'){ ?>
						<!-- Banner -->
							<section id="banner">
								<jdoc:include type="modules" name="banner-principal" />
							</section>

						<!-- Intro -->
							<section id="intro" class="container">
								<jdoc:include type="modules" name="posicao" />
								<div class="row">
									<div class="4u 12u(mobile)">
										<section class="first">
											<i class="icon featured fa-cog"></i>
											<header>
												<h2>Ipsum consequat</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="middle">
											<i class="icon featured alt fa-flash"></i>
											<header>
												<h2>Magna etiam dolor</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="last">
											<i class="icon featured alt2 fa-star"></i>
											<header>
												<h2>Tempus adipiscing</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
								</div>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Get Started</a></li>
										<li><a href="#" class="button alt big">Learn More</a></li>
									</ul>
								</footer>
							</section>
							<?php } ?>
					</div>
				</div>
				<div id="main-wrapper">
			<?php 
				switch ($classPage) {
					case 'home': ?>
						<!-- Main Home -->
						<div class="container">
								<div class="row">
									<div class="12u">

										<!-- Portfolio -->
											<section>
												<header class="major">
													<h2>My Portfolio</h2>
												</header>

												<jdoc:include type="modules" name="ultimas-noticias" />

												<div class="row">
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic02.jpg" alt="" /></a>
															<header>
																<h3>Ipsum feugiat et dolor</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic03.jpg" alt="" /></a>
															<header>
																<h3>Sed etiam lorem nulla</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic04.jpg" alt="" /></a>
															<header>
																<h3>Consequat et tempus</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
												</div>
												<div class="row">
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic05.jpg" alt="" /></a>
															<header>
																<h3>Blandit sed adipiscing</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic06.jpg" alt="" /></a>
															<header>
																<h3>Etiam nisl consequat</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
													<div class="4u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic07.jpg" alt="" /></a>
															<header>
																<h3>Dolore nisl feugiat</h3>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
															<footer>
																<a href="#" class="button alt">Find out more</a>
															</footer>
														</section>
													</div>
												</div>
											</section>

									</div>
								</div>
								<div class="row">
									<div class="12u">

										<!-- Blog -->
											<section>
												<header class="major">
													<h2>The Blog</h2>
												</header>
												<div class="row">
													<div class="6u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic08.jpg" alt="" /></a>
															<header>
																<h3>Magna tempus consequat lorem</h3>
																<p>Posted 45 minutes ago</p>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
															<footer>
																<ul class="actions">
																	<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
																	<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
																</ul>
															</footer>
														</section>
													</div>
													<div class="6u 12u(mobile)">
														<section class="box">
															<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic09.jpg" alt="" /></a>
															<header>
																<h3>Aptent veroeros et aliquam</h3>
																<p>Posted 45 minutes ago</p>
															</header>
															<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
															<footer>
																<ul class="actions">
																	<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
																	<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
																</ul>
															</footer>
														</section>
													</div>
												</div>
											</section>

									</div>
								</div>
						</div>
			<?php 		break;
					case 'fotos':
			?>
						<!-- Main Contato -->
						<div class="container">
							<!-- Content -->
							<article class="box post">
								<jdoc:include type="message" />
								<jdoc:include type="component" />								
							</article>
						</div>
			<?php 		break;
					case 'quartos':
			?>
						<!-- Main Contato -->
						<div class="container">
							<!-- Content -->
							<article class="box post">
								<jdoc:include type="message" />
								<jdoc:include type="component" />								
							</article>
						</div>
			<?php 		break;
					case 'contato':
			?>
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			<?php 		break;
					default: 
			?>
						<!-- Main Default Left -->
						<div class="container">
							<div class="row">
								<div class="4u 12u(mobile)">
									<!-- Sidebar -->
									<section class="box">
										<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
										<header>
											<h3>Sed etiam lorem nulla</h3>
										</header>
										<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
										<footer>
											<a href="#" class="button alt">Magna sed taciti</a>
										</footer>
									</section>
									<section class="box">
										<header>
											<h3>Feugiat consequat</h3>
										</header>
										<p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
										<ul class="divided">
											<li><a href="#">Sed et blandit consequat sed</a></li>
											<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
											<li><a href="#">Sapien id suscipit magna sed felis</a></li>
											<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
										</ul>
										<footer>
											<a href="#" class="button alt">Ipsum consequat</a>
										</footer>
									</section>
								</div>
							
								<div class="8u 12u(mobile) important(mobile)">
									<!-- Content -->
									<article class="box post">
										<jdoc:include type="message" />
										<jdoc:include type="component" />									
									</article>
								</div>
							</div>
						</div>
			<?php 		break;
				} ?>
				</div>
			<!-- Footer -->
				<div id="footer-wrapper">
					<section id="footer" class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Pousada Praia de Bombinhas</h2>
									</header>
									<jdoc:include type="modules" name="rodape-1" />
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Redes Sociais</h2>
									</header>
									<ul class="social">
										<li><a class="icon fa-facebook" href="https://www.facebook.com/ppraiabombinhas/">
											<span class="label">Facebook</span>
											</a>
										</li>
									</ul>

									<ul class="contact">
										<li>
											<h3>Endereço</h3>
											<p>
												Rua Parati, n° 720<br />
												Bombinhas - Santa Catarina<br />
												CEP 88.2115-000
											</p>
										</li>
										<li>
											<h3>E-mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Telefone</h3>
											<p>(47) 3369-2194</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Sobre nós</h2>
									</header>
									<a href="#" class="image featured">
										<img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/footerpic.jpg" alt="" />
									</a>
									<p>
											<strong>Mussum Ipsum</strong>, cacilds vidis litro abertis. 
											Viva Forevis aptent taciti sociosqu ad litora torquent 
											Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. 
											Casamentiss faiz malandris se pirulitá.
											Quem manda na minha terra sou Euzis!
									</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Pousada da Praia de Bombinhas. Todos os direitos reservados.</li>
											<li>Desenvolvido por <a href="http://facebook.com/narukaioh">Ju Dantas</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				</div>

		</div>
	</body>
</html>