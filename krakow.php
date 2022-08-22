
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<!-- Head -->
<head>
    <title>Plague Doctor</title>
	<link rel="icon" type="image/x-icon" href="/images/icon.jpg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>  
</head>

<body class="is-preload landing">
    <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <style>
                    h1 {
                      font-family: "Sofia", sans-serif;
                      font-size: 50px;
                      color:#c2c2c2;
                    }
                </style>

                <h1 id="logo"><a href="index.php">Plague Doctor</a></h1>

                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="welcome.php">Strefa Pacjenta</a></li>
                        <li> <a href="#">Lekarze</a>
                            <ul>
                                <li><a href="alban.php">Dr Alban</a></li>
                                <li><a href="dre.php">Dr Dre</a></li>
                                <li><a href="oetker.php">Dr Oetker</a></li>
                            </ul>
                        </li>

                        <li><a href="price.php">Cennik</a></li>
                            <li>
                                <a href="#">Placówki</a>
                                <ul>
                                    <li><a href="warszawa.php">Warszawa</a></li>
                                    <li><a href="krakow.php">Krakow</a></li>
                                    <li><a href="poznan.php">Poznań</a></li>
                                    <li><a href="gdansk.php">Gdańsk</a></li>
                                </ul>
                            </li>

                        </li>
                        <li><a href="form.php">Masz Pytania?</a></li>

                        <?php
						include "login-logout.php";
						?>
                        
                    </ul>  
                </nav>
            </header>
    </div>

			<!-- Main -->
            <div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Oddział Kraków</h2>
							<p>ul. Szeroka 166</p>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Kraków</h3>
										</section>
									
										<section>
											<a href="#" class="image fit"><img src="images/krakow.jpg" alt="" /></a>
										
										
											<ul class="fa-ul">
												<li><i class="fa-li fa fa-home "></i>Szeroka 166</li>
												<li><i class="fa-li fa fa-city "></i>32-588 Kraków</li>
												<li><i class="fa-li fa fa-phone "></i>(58)555-21-23</li>
												<li><i class="fa-li fa fa-clock fa-spin"></i>24h</li>
												<li><i class="fa-li fa fa-envelope"></i>krakow@plaguedoctor.pl</li>
											  </ul>
											

											<footer>
												<ul class="actions">
													<li><a href="index.php" class="button">Strona Główna</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
								<style>
									p { 
										text-indent: 30px; }
									span {
										color: tomato;
										font-size: 30px;
									}
								</style>
									<section id="content">
										
										<p><span>&check;</span>    Brak Windy</p>
										
										<p><span>&check;</span>    Grzyb na ścianach</p>
										
										<p><span>&check;</span>    Płatny Parking</p>
										<p><span>&check;</span>    Zimna woda</p>
										
										<p><span>&check;</span>    Najwyższe ceny</p>
										
										<p><span>&check;</span>    Krematorium</p>
										
										



										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2562.0747807665634!2d19.94203331591277!3d50.047430424202595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc63257ba02d631c!2zNTDCsDAyJzUwLjciTiAxOcKwNTYnMzkuMiJF!5e0!3m2!1spl!2spl!4v1638882475106!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</section>

							</div>
						</div>
					</div>
				</div>

				
<?php
    include 'footer-scripts.html';
?>
</body>
</html>