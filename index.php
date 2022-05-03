<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
	<link rel="manifest" href="assets/img/site.webmanifest">
	<title>Ingrid Borges</title>
</head>
<body>
	<header class="header" id="header">
		<nav class="nav container">
			<a href="#" class="nav__logo">Ingrid</a>

			<div class="nav__menu" id="nav-menu">
				<ul class="nav__list grid">
					<li class="nav__item">
						<a href="#home" class="nav__link active-link">
							<i class="uil uil-estate nav__icon"></i> Home
						</a>
					</li>

					<li class="nav__item">
						<a href="#about" class="nav__link">
							<i class="uil uil-user nav__icon"></i> Sobre
						</a>
					</li>
				
					<li class="nav__item">
						<a href="#skills" class="nav__link">
							<i class="uil uil-file-alt nav__icon"></i> Skills
						</a>
					</li>
				
					<li class="nav__item">
						<a href="#services" class="nav__link">
							<i class="uil uil-briefcase-alt nav__icon"></i> Serviços
						</a>
					</li>
				
					<li class="nav__item">
						<a href="#portfolio" class="nav__link">
							<i class="uil uil-scenery nav__icon"></i> Portfólio
						</a>
					</li>
				
					<li class="nav__item">
						<a href="#contact" class="nav__link">
							<i class="uil uil-message nav__icon"></i> Contato
						</a>
					</li>
				</ul>
				<i class="uil uil-times nav__close" id="nav-close"></i>
			</div>

			<div class="nav__btns">
				<!-- Botão de mudança de tema -->
				<i class="uil uil-moon change-theme" id="theme-button"></i>

				<div class="nav__toggle" id="nav-toggle">
					<i class="uil uil-apps"></i>
				</div>
			</div>
		</nav>
	</header>

	<main class="main">
		<section class="home section" id="home">
			<div class="home__container container grid">
				<div class="home__content grid">
					<div class="home__social">
						<a href="https://instagram.com/eu.ingridborges?igshid=YmMyMTA2M2Y=" class="home__social-icon" target="_blank">
							<i class="uil uil-instagram"></i>
						</a>
						<a href="https://linkedin.com/in/eu-ingrid-borges" class="home__social-icon" target="_blank">
							<i class="uil uil-linkedin-alt"></i>
						</a>
						<a href="https://github.com/ihborges" class="home__social-icon" target="_blank">
							<i class="uil uil-github-alt"></i>
						</a>
					</div>
					<div class="home__img">
						<svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <mask id="mask0" mask-type="alpha">
						        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
						        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
						        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
						        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
						    </mask>
						    <g mask="url(#mask0)">
						        <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
						        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
						        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
						        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
						        <image class="home__blob-img" x="12" y="18" xlink:href="assets/img/home_img.png"/>
						    </g>
						</svg>
					</div>
					<div class="home__data">
						<h1 class="home__title">Olá, sou a Ingrid</h1>
						<h3 class="home__subtitle">Desenvolvedora Web</h3>
						<p class="home__description">Conhecimento em web design e desenvolvimento, produzindo trabalhos de qualidade.</p>
						<a href="#contact" class="button button--flex">
							Contrate-me <i class="uil uil-message button__icon"></i>
						</a>
					</div>
				</div>
				<div class="home__scroll">
					<a href="#about" class="home__scroll-button button--flex">
						<i class="uil uil-mouse-alt home__scroll-mouse"></i>
						<span class="home__scroll-name">Rolagem para baixo</span>
						<i class="uil uil-arrow-down home__scroll-arrow"></i>
					</a>
				</div>
			</div>
		</section>

		<section class="about section" id="about">
			<h2 class="section__title">Sobre Mim</h2>
			<span class="section__subtitle">Minha introdução</span>
			<div class="about__container container grid">
				<img src="assets/img/about_img.jpg" alt="" class="about__img">
				
				<div class="about__data">
					<p class="about__description">Sou a Ingrid Borges, desenvolvedora com habilidade em tecnologias web e design Ui/Ux, formada em Informática para Internet pela Etec Martinho Di Ciero. Busco sempre aprender e evoluir para oferecer o melhor.</p>

					<!-- <div class="about__info">
						<div>
							<span class="about__info-title">02+</span>
							<span class="about__info-name">Cursos </br>feitos</span>
						</div>
						<div>
							<span class="about__info-title">02+</span>
							<span class="about__info-name">Projetos </br>completos</span>
						</div>
						<div>
							<span class="about__info-title">08+</span>
							<span class="about__info-name">Anos de </br>experiência</span>
						</div>
					</div> -->

					<div class="about__buttons">
						<a download="" href="assets/pdf/ingrid_borges.pdf" class="button button--flex">
							Download CV <i class="uil uil-download-alt button__icon"></i>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="skills section" id="skills">
			<h2 class="section__title">Skills</h2>
			<span class="section__subtitle">Meu nível técnico</span>

			<div class="skills__container container grid">
				<div>
					<div class="skills__content skills__open">
						<div class="skills__header">
							<i class="uil uil-brackets-curly skills__icon"></i>
						
							<div>
								<h1 class="skills__title">Front End</h1>
								<!-- <span class="skills__subtitle">Mais de 4 anos</span> -->
							</div>

							<i class="uil uil-angle-down skills__arrow"></i>
						</div>

						<div class="skills__list grid">
							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">HTML5</h3>
									<span class="skills__number">85%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__html"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">CSS3</h3>
									<span class="skills__number">80%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__css"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">Materialize</h3>
									<span class="skills__number">75%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__materialize"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">Bootstrap</h3>
									<span class="skills__number">65%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__bootstrap"></span>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="skills__content skills__close">
						<div class="skills__header">
							<i class="uil uil-swatchbook skills__icon"></i>
						
							<div>
								<h1 class="skills__title">Back End</h1>
								<span class="skills__subtitle">Mais de 4 anos</span>
							</div>

							<i class="uil uil-angle-down skills__arrow"></i>
						</div>

						<div class="skills__list grid" >
							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">PHP</h3>
									<span class="skills__number">85%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__php"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">JavaScript</h3>
									<span class="skills__number">60%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__js"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">SQL</h3>
									<span class="skills__number">75%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__sql"></span>
								</div>
							</div>
						</div>
					</div> -->
				</div>

				<div>
					<div class="skills__content skills__close">
						<div class="skills__header">
							<i class="uil uil-server-network skills__icon"></i>
						
							<div>
								<h1 class="skills__title">Back End</h1>
								<!-- <span class="skills__subtitle">Mais de 4 anos</span> -->
							</div>

							<i class="uil uil-angle-down skills__arrow"></i>
						</div>

						<div class="skills__list grid" >
							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">PHP</h3>
									<span class="skills__number">85%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__php"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">JavaScript</h3>
									<span class="skills__number">60%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__js"></span>
								</div>
							</div>

							<div class="skills__data">
								<div class="skills__titles">
									<h3 class="skills__name">SQL</h3>
									<span class="skills__number">75%</span>
								</div>
								<div class="skills__bar">
									<span class="skills__percentage skills__sql"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="qualification section">
			<h2 class="section__title">Certificações</h2>
			<span class="section__subtitle">Minha jornada pessoal</span>

			<div class="qualification__container container">
				<div class="qualification__tabs">
					<div class="qualification__button button--flex qualification__active" data-target='#education'>
						<i class="uil uil-graduation-cap qualification__icon"></i>
						Ensino
					</div>

					<div class="qualification__button button--flex" data-target="#work">
						<i class="uil uil-briefcase-alt qualification__icon"></i>
						Trabalho
					</div>
				</div>

				<div class="qualification__sections">
					<div class="qualification__content qualification__active" data-content id="education">
						<div class="qualification__data">
							<div>
								<h3 class="qualification__title">Informática para Internet</h3>
								<span class="qualification__subtitle">Etec Martinho Di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>

							<div>
								<span class="qualification__rounder"></span>
								<span class="qualification__line"></span>
							</div>
						</div>

						<!-- <div class="qualification__data">
							<div></div>

							<div>
								<span class="qualification__rounder"></span>
								<span class="qualification__line"></span>
							</div>

							<div>
								<h3 class="qualification__title">Design Web</h3>
								<span class="qualification__subtitle">Etec Martinho di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>
						</div>

						<div class="qualification__data">
							<div>
								<h3 class="qualification__title">Design Web</h3>
								<span class="qualification__subtitle">Etec Martinho di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>

							<div>
								<span class="qualification__rounder"></span>
								<span class="qualification__line"></span>
							</div>
						</div>


						<div class="qualification__data">
							<div></div>

							<div>
								<span class="qualification__rounder"></span> -->
								<!--<span class="qualification__line"></span>-->
							<!-- </div>

							<div>
								<h3 class="qualification__title">Design Web</h3>
								<span class="qualification__subtitle">Etec Martinho di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>
						</div> -->
					</div>

					<div class="qualification__content" data-content id="work">
						<div class="qualification__data">
							<div>
								<h3 class="qualification__title">A procura</h3>
								<span class="qualification__subtitle">Em busca de uma oportunidade</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2022
								</div>
							</div>

							<div>
								<span class="qualification__rounder"></span>
								<span class="qualification__line"></span>
							</div>
						</div>

						<!-- <div class="qualification__data">
							<div></div>

							<div>
								<span class="qualification__rounder"></span>
								<span class="qualification__line"></span>
							</div>

							<div>
								<h3 class="qualification__title">Design Web</h3>
								<span class="qualification__subtitle">Etec Martinho di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>
						</div>

						<div class="qualification__data">
							<div>
								<h3 class="qualification__title">Design Web</h3>
								<span class="qualification__subtitle">Etec Martinho di Ciero</span>
								<div class="qualification__calendar">
									<i class="uil uil-calendar-alt"></i>
									2019 - 2021
								</div>
							</div>

							<div>
								<span class="qualification__rounder"></span> -->
								<!--<span class="qualification__line"></span>-->
							<!-- </div>
						</div> -->
					</div>
				</div>
			</div>
		</section>

		<section class="services section" id="services">
			<h2 class="section__title">Serviços</h2>
			<span class="section__subtitle">O que ofereço</span>

			<div class="services__container container grid">
				<div class="services__content">
					<div>
						<i class="uil uil-web-grid services__icon"></i>
						<h3 class="services__title">Design </br>Ui/Ux</h3>
					</div>

					<span class="button button--flex button--small button--link services__button">
						Saiba mais
						<i class="uil uil-arrow-right button__icon"></i>
					</span>

					<div class="services__modal">
						<div class="services__modal-content">
							<h4 class="services__modal-title">Ui/Ux </br> Design</h4>
							<i class="uil uil-times services__modal-close"></i>

							<ul class="services__modal-services grid">
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Elementos de interação.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Layout moderno para seus clientes.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Sites de usabilidade fácil e intuitivos.</p>
								</li>
								<!-- <li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>I position your company brand.</p>
								</li> -->
							</ul>
						</div>
					</div>
				</div>

				<div class="services__content">
					<div>
						<i class="uil uil-arrow services__icon"></i>
						<h3 class="services__title">Front End</br> Developer</h3>
					</div>

					<span class="button button--flex button--small button--link services__button">
						Saiba mais
						<i class="uil uil-arrow-right button__icon"></i>
					</span>

					<div class="services__modal">
						<div class="services__modal-content">
							<h4 class="services__modal-title">Front End</br> Developer</h4>
							<i class="uil uil-times services__modal-close"></i>

							<ul class="services__modal-services grid">
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Sites responsivos.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Personalização de página web.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Design com a cara da sua marca.</p>
								</li>
								<!-- <li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>I position your company brand.</p>
								</li> -->
							</ul>
						</div>
					</div>
				</div>


				<div class="services__content">
					<div>
						<i class="uil uil-pen services__icon"></i>
						<h3 class="services__title">Back End</br> Developer</h3>
					</div>

					<span class="button button--flex button--small button--link services__button">
						Saiba mais
						<i class="uil uil-arrow-right button__icon"></i>
					</span>

					<div class="services__modal">
						<div class="services__modal-content">
							<h4 class="services__modal-title">Back End </br> Developer</h4>
							<i class="uil uil-times services__modal-close"></i>

							<ul class="services__modal-services grid">
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Sistemas eficientes.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Sites com multifunções.</p>
								</li>
								<li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p>Configuração e manipulação de dados.</p>
								</li>
								<!-- <li class="services__modal-service">
									<i class="uil uil-check-circle services__modal-icon"></i>
									<p></p>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio section" id="portfolio">
			<h2 class="section__title">Portfólio</h2>
			<span class="section__subtitle">Projetos recentes</span>
			<div class="portfolio__container container swiper-container">
				<div class="swiper-wrapper">
					<div class="portfolio__content grid swiper-slide">
						<img src="assets/img/portfolio1.jpeg" alt="" class="portfolio__img">
						<div class="portfolio__data">
							<h3 class="portfolio__title">Ingrid Borges</h3>
							<p class="portfolio__description">Portfólio pessoal com exposição de projetos, serviços, meio de contato.</p>
							<a href="https://ingridborges.com" class="button button--flex button--small portfolio__button">
								Visitar
								<i class="uil uil-arrow-right button__icon"></i>
							</a>
						</div>
					</div>

					<div class="portfolio__content grid swiper-slide">
						<img src="assets/img/portfolio2.jpeg" alt="" class="portfolio__img">
						<div class="portfolio__data">
							<h3 class="portfolio__title">Meeting Point</h3>
							<p class="portfolio__description">Rede social que conecta seus usuários através de intereses em comum.</p>
							<a href="https://meetingpoint.cf" class="button button--flex button--small portfolio__button">
								Visitar
								<i class="uil uil-arrow-right button__icon"></i>
							</a>
						</div>
					</div>

					<!-- <div class="portfolio__content grid swiper-slide">
						<img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">
						<div class="portfolio__data">
							<h3 class="portfolio__title">Meeting Point</h3>
							<p class="portfolio__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt.</p>
							<a href="#" class="button button--flex button--small portfolio__button">
								Visitar
								<i class="uil uil-arrow-right button__icon"></i>
							</a>
						</div>
					</div> -->
				</div>
		
				<div class="swiper-button-next">
					<i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
				</div>
				<div class="swiper-button-prev">
					<i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
				</div>

				<div class="swiper-pagination"></div>
			</div>
		</section>

		<section class="project section">
			<div class="project__bg">
				<div class="project__container container grid">
					<div class="project__data">
						<h2 class="project__title">Você tem um projeto novo</h2>
						<p class="project__description">Contrate-me agora e vamos fazer o seu projeto sair do papel.</p>
						<a href="#contact" class="button button--flex button--white">
							Contrate-me
							<i class="uil uil-message project__icon button__icon"></i>
						</a>
					</div>

					<img src="assets/img/project_img.png" alt="" class="project__img">
				</div>
			</div>
		</section>

		<!-- <section class="testimonial section">
			<h2 class="section__title">Comentários</h2>
			<span class="section__subtitle">Meus clientes</span>

			<div class="testimonial__container container swiper-container">
				<div class="swiper-wrapper">
					<div class="testimonial__content swiper-slide"> 
						<div class="testimonial__data">
							<div class="testimonial__header">
								<img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">

								<div>
									<h3 class="testimonial__name">Sara Smith</h3>
									<span class="testimonial__client">Cliente</span>
								</div>
							</div>

							<div>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
							</div>
						</div>

						<p class="testimonial__description">Sara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara.</p>
					</div>

					<div class="testimonial__content swiper-slide"> 
						<div class="testimonial__data">
							<div class="testimonial__header">
								<img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">

								<div>
									<h3 class="testimonial__name">Sara Smith</h3>
									<span class="testimonial__client">Cliente</span>
								</div>
							</div>

							<div>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
							</div>
						</div>

						<p class="testimonial__description">Sara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara.</p>
					</div>

					<div class="testimonial__content swiper-slide"> 
						<div class="testimonial__data">
							<div class="testimonial__header">
								<img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

								<div>
									<h3 class="testimonial__name">Sara Smith</h3>
									<span class="testimonial__client">Cliente</span>
								</div>
							</div>

							<div>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
								<i class="uil uil-star testimonial__icon-star"></i>
							</div>
						</div>

						<p class="testimonial__description">Sara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara SmithSara.</p>
					</div>
				</div>

				<div class="swiper-pagination swiper-pagination-testimonial"></div>
			</div>
		</section> -->

		<section class="contact section" id="contact">
			<h2 class="section__title">Contrate-me</h2>
			<span class="section__subtitle">Entrar em contato</span>

			<div class="contact__container container grid">
				<div>
					<div class="contact__information">
						<i class="uil uil-phone contact__icon"></i>

						<div>
							<h3 class="contact__title">Ligue-me</h3>
							<span class="contact__subtitle">(11) 93276-1750</span>
						</div>
						
					</div>

					<div class="contact__information">
						<i class="uil uil-envelope contact__icon"></i>

						<div>
							<h3 class="contact__title">E-mail</h3>
							<span class="contact__subtitle">euingridborges@gmail.com</span>
						</div>
						
					</div>

					<div class="contact__information">
						<i class="uil uil-map-marker contact__icon"></i>

						<div>
							<h3 class="contact__title">Localização</h3>
							<span class="contact__subtitle">Itu - São Paulo, Brasil</span>
						</div>
						
					</div>
				</div>

				<form method="POST" class="contact__from grid">
					<div class="contact__inputs grid">
						<div class="contact__content">
							<label for="" class="contact__label">Nome</label>
							<input type="text" class="contact__input" name="nome">
						</div>

						<div class="contact__content">
							<label for="" class="contact__label">E-mail</label>
							<input type="email" class="contact__input" name="email">
						</div>
					</div>

					<div class="contact__content">
						<label for="" class="contact__label">Projeto</label>
						<input type="text" class="contact__input" name="projeto">
					</div>
					<div class="contact__content">
						<label for="" class="contact__label">Mensagem</label>
						<textarea name="mensagem" cols="0" rows="7" class="contact__input"></textarea>
					</div>

					<div>
						<input type="submit" value="Enviar Mensagem" class="button button--flex" name="enviar">
					</div>
				</form>
			</div>
		</section>
	</main>

	<footer class="footer">
		<div class="footer__bg">
			<div class="footer__container container grid">
				<div>
					<h1 class="footer__title">Ingrid</h1>
					<span class="footer__subtitle">Desenvolvedora Web</span>
				</div>

				<ul class="footer__links">
					<li>
						<a href="#services" class="footer__link">Serviços</a>
					</li>
					<li>
						<a href="#portfolio" class="footer__link">Portfólio</a>
					</li>
					<li>
						<a href="#contact" class="footer__link">Contratar</a>
					</li>
				</ul>

				<div class="footer__sociais">
					<a href="https://wa.me/+5511932761750?text=Ol%C3%A1,%20tenho%20interesse%20em%20seu%20trabalho" target="_blank" class="footer__social">
						<i class="uil uil-whatsapp"></i>
					</a>
					<a href="https://instagram.com/eu.ingridborges?igshid=YmMyMTA2M2Y=" target="_blank" class="footer__social">
						<i class="uil uil-instagram"></i>
					</a>
					<a href="www.linkedin.com/eu-ingrid-borges" target="_blank" class="footer__social">
						<i class="uil uil-linkedin"></i>
					</a>
				</div>
			</div>

			<p class="footer__copy">© Ingrid Borges, 2022. Todos os direitos reservados.</p>
		</div>
	</footer>


	<a href="#home" class="scrollup" id="scroll-up">
		<i class="uil uil-arrow-up scrollup__icon"></i>
	</a>

	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/sweetalert.js"></script>
</body>
</html>

<?php
	if (!empty($_POST['enviar'])) {
		if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['projeto']) && !empty($_POST['mensagem'])) {
		  	$nome = $_POST['nome'];
		  	$email = $_POST['email'];
		  	$projeto = $_POST['projeto'];
		  	$mensagem = $_POST['mensagem'];

			$arquivo = "<html> $mensagem </html>";
			$destino = "contato@ingridborges.com";
			$remetente = $email;
			$assunto = "$nome via Ingrid Borges";

			//Garante a exibição correta dos caracteres
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=utf-8\n";
			$headers .= "From: <$remetente>";

			//Enviar
			$envio = mail($destino, $assunto, $arquivo, $headers);

			if(!$envio){
				function alerta($type, $title, $msg){
					echo "<script type='text/javascript'>
					Swal.fire({
					  type: '$type',
					  title: '$title',
					  text: '$msg',
					  showConfirmButton: true
					});
					</script>";
				}

				alerta("error", "Ops...", "Houve um erro ao enviar o e-mail. Tente novamente mais tarde.");
			}else{
				function alerta($type, $title, $msg){
					echo "<script type='text/javascript'>
					Swal.fire({
					  type: '$type',
					  title: '$title',
					  text: '$msg',
					  showConfirmButton: true
					});
					</script>";
				}

				alerta("sucess", "Enviado", "E-mail enviado com sucesso");
			}
		}else{
			function alerta($type, $title, $msg){
				echo "<script type='text/javascript'>
				Swal.fire({
				  type: '$type',
				  title: '$title',
				  text: '$msg',
				  showConfirmButton: true
				});
				</script>";
			}

			alerta("error", "Erro", "Preencha todos os campos");
		}
	}
?>