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

$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.min.js', 'text/javascript');
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

	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo 
							<h1><a href="index.html">Pousada da Praia de Bombinhas</a></h1> -->
							<?php //var_dump($logo); die(); ?>
						<!-- Nav -->
							<nav id="nav">
								<div class="logo"></div>
								<jdoc:include type="modules" name="menu-principal" />
							</nav>

						<!-- Banner -->
							<section id="banner">
								<div class="screen"></div>
								<jdoc:include type="modules" name="banner-principal" />
								<!-- <header>
									<h2>Howdy. This is Dopetrope.</h2>
									<p>A responsive template by HTML5 UP</p>
								</header> -->
							</section>

						<!-- Intro -->
							<section id="intro" class="container">
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

					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
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
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<section id="footer" class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
								<section>
									<header>
										<h2>Blandit nisl adipiscing</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jan <strong>27</strong></span>
											<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
											<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
										</li>
										<li>
											<span class="date">Jan <strong>23</strong></span>
											<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
											<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
										</li>
										<li>
											<span class="date">Jan <strong>15</strong></span>
											<h3><a href="#">Magna tempus lorem feugiat</a></h3>
											<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>12</strong></span>
											<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
											<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>10</strong></span>
											<h3><a href="#">Blandit tempus aliquam?</a></h3>
											<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>What's this all about?</h2>
									</header>
									<a href="#" class="image featured"><img src="<?php echo $this->baseurl . '/templates/' . $this->template  ?>/images/pic10.jpg" alt="" /></a>
									<p>
										This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by
										<a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
										the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
									</p>
									<footer>
										<a href="#" class="button">Find out more</a>
									</footer>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Tempus consequat</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Ipsum et phasellus</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Vitae tempor lorem</h2>
									</header>
									<ul class="social">
										<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<p>
												Untitled Incorporated<br />
												1234 Somewhere Road Suite<br />
												Nashville, TN 00000-0000
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(800) 000-0000</p>
										</li>
									</ul>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				</div>

		</div>

	</body>
</html>