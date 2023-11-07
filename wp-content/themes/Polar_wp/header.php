<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Polar</title>
		 <?php wp_head(); ?>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="<?php bloginfo('template_url'); ?>/src/img/favicon-16x16.png"
		/>
	</head>
	<body>
		<div class="wrapper">
			<header class="header">
				<div class="header__container">
					<div class="header__row">	
						<a href="/"><img src="<?php bloginfo('template_url'); ?>/src/img/logo.png" alt="" class="logo" /></a>
						<nav class="nav">
							<ul class="nav__list">
								<li data-goto="num-1" class="scroll">
									<a href="#" class="active">Home</a>
								</li>
								<li data-goto="num-2" class="scroll">
									<a href="#!">Services</a>
								</li>
								<li data-goto="num-3" class="scroll"><a href="#!">About</a></li>
								<li data-goto="num-4" class="scroll">
									<a href="#!">Projects</a>
								</li>
								<li data-goto="num-5" class="scroll">
									<a href="#!">Contact</a>
								</li>
							</ul>
						</nav>
						<div class="burger"><span></span></div>
						<img
							id="dark"
							class="day-night day-mode"
							src="<?php bloginfo('template_url'); ?>/src/img/day-night.png"
							alt="day-night"
						/><a class="button" href="#"><div>Buy Now</div></a>
					</div>
				</div>
			</header>