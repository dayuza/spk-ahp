<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SPK AHP</title>
	
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free-5.15.2-web/css/all.min.css">
	<link rel="stylesheet" href="cdn.jsdelivr.net/npm/docsearch.js%402/dist/cdn/docsearch.min.css">
	<link rel="stylesheet" href="css/bulma-docs.minf988.css?v=202206251943">
	<link rel="stylesheet" href="assets/dist/sweetalert2.min.css">
</head>

<body class="layout-documentation">

	<nav id="navbar" class="bd-navbar navbar">
		<div class="navbar-brand-box">
			<a class="navbar-item"  href="https://yuza.fercel.app/">
				 <img src="images/logo-sm.svg" height="22">&nbsp;&nbsp;SPK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</a>

			<button id="searchIcon" class="navbar-item bd-navbar-search-icon bd-navbar-search-mobile-icon">
				<span class="icon">
					<i class="fas fa-lg fa-search"></i>
				</span>
			</button>

		</div>

		
		</div>
		</div>
		<div id="navMenuDocumentation" class="navbar-menu">
			<div id="navbarStartOriginal" class="navbar-start bd-navbar-start bd-is-original">
				<div class="navbar-item bd-navbar-item bd-navbar-item-base has-dropdown is-hoverable">
					<a class="navbar-link bd-navbar-ellipsis" href="">
						<span class="icon">
							<i class="fas fa-ellipsis-h"></i>
						</span>
					</a>

					<div class="navbar-dropdown bd-navbar-dropdown is-boxed">

						<a class="navbar-item" data-route="" href="#">
							<div>
								<div class="icon-text">
									<span class="icon has-text-love">
									<img src="images/logo-sm.svg" height="22">
									</span>
									<span>
										<strong>SPK</strong>
									</span>
								</div><br>
								Sistem Pendukung Keputusan ini dibikin oleh Teguh Nugratama Dayuza
							</div>
						</a>

					</div>
				</div>
			</div>

			<div class="navbar-item bd-navbar-sponsor-button is-hidden-desktop">
				<a class="button is-sponsor is-light">
					<span class="icon is-small">
						<i class="fas fa-thumbs-up"></i>
					</span>
				</a>
			</div>


		</div>

		<div id="search" class="bd-search">
			<p class="control has-icons-left">
				<input id="algoliaSearch" class="input is-rounded" type="text" placeholder="Search the docs">
				<span class="icon is-small is-left">
					<i class="fas fa-search"></i>
				</span>
			</p>
		</div>
	</nav>
	<header id="docsToggles" class="bd-docs-toggles">
		<button class="button is-primary is-light bd-fat-button is-small" id="docsNavButton">Show menu</button>
		<button class="button is-primary is-light bd-fat-button is-small" id="docsSideButton">Show sidebar</button>
	</header>

	<div id="docs" class="bd-docs bd-is-contained">
		<div id="docsNavOverlay" class="bd-docs-overlay"></div>
		<nav id="docsNav" class="bd-docs-nav ">
			<nav id="categories" class="bd-categories">
				<div class="bd-categories-filter">
					<input id="categoriesFilter" class="input is-small" type="text" name="" placeholder="Filter links"
						style="border-radius: 0.5em;">
				</div>
				<div class="bd-category ">
					<header class="bd-category-header">
						<a data-name="Overview" class="navbar-item
				bd-navbar-item
				bd-navbar-item-backers
				bd-navbar-item-more" href="home.php"><strong class="bd-name">&nbsp;<span class="icon has-text-expo">
									<i class="fas fa-star"></i>
								</span>&nbsp; Home
							</strong>
						</a>
					</header>

					<div class="bd-category ">
						<header class="bd-category-header">
							<a data-name="Overview" class="
				navbar-item
				bd-navbar-item
				bd-navbar-item-extensions
				bd-navbar-item-more" href="kriteria.php"><strong class="bd-name"><span class="icon has-text-patreon">
										<i class="fab fa-patreon"></i>
									</span> (C) &nbsp;<div class="ui blue tiny label" style="float: right;">
										<?php echo getJumlahKriteria(); ?>
									</div>
								</strong>
							</a>
						</header>

						<div class="bd-category ">
							<header class="bd-category-header">
								<a data-name="Overview" class="navbar-item
				bd-navbar-item
				bd-navbar-item-bulma-book
				bd-navbar-item-more" href="alternatif.php"><strong class="bd-name"><span class="icon has-text-bleeding">
											<i class="fas fa-bookmark"></i>
										</span> (A) &nbsp;<div class="ui blue tiny label" style="float: right;">
											<?php echo getJumlahAlternatif(); ?>
										</div>
									</strong>
								</a>
							</header>

							<div class="bd-category ">
								<header class="bd-category-header">
									<a data-name="Overview" class="navbar-item
				bd-navbar-item
				bd-navbar-item-blog
				bd-navbar-item-more" href="bobot_kriteria.php"><strong class="bd-name">&nbsp;<span class="icon has-text-bootstrap">
												<i class="fas fa-exchange-alt"></i>
											</span>&nbsp; Analisis (C)
										</strong>
									</a>
								</header>

								<div class="bd-category ">
									<header class="bd-category-header">
										<a data-name="Overview" class=" navbar-item
				bd-navbar-item
				bd-navbar-item-brand
				bd-navbar-item-more" href="bobot.php?c=1"><strong
												class="bd-name">&nbsp;<span class="icon has-text-bootstrap">
													<i class="fas fa-exchange-alt"></i>
												</span>&nbsp; Analisis (A)
											</strong>
										</a>
									</header>

									<ul class="menu-list">
										<?php
						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a class='navbar-item
								bd-navbar-item
								bd-navbar-item-backers
								bd-navbar-item-more' href='bobot.php?c=".($i+1)."'>&nbsp;&nbsp;".getKriteriaNama($i)."</a></li>";
							}
						}
							?>
									</ul>

									<div class="bd-category ">
										<header class="bd-category-header">
											<a data-name="Overview" class="navbar-item
				bd-navbar-item
				bd-navbar-item-expo
				bd-navbar-item-base" href="hasil.php"><strong
													class="bd-name">&nbsp;<span class="icon has-text-primary">
											<i class="fas fa-book"></i>
											</span>&nbsp; Hasil
												</strong>
											</a>
										</header>

									</div>
								</div>
			</nav>
		</nav>