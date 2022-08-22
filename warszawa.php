
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
							<h2>Oddział Warszawa</h2>
							<p>ul. Poległej 5/L</p>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Warszawa</h3>
										</section>
									
										<section>
											<a href="#" class="image fit"><img src="images/warszawa.jpg" alt="" /></a>
										
										
											<ul class="fa-ul">
												<li><i class="fa-li fa fa-home "></i>Poległej 5/L</li>
												<li><i class="fa-li fa fa-city "></i>01-777 Warszawa</li>
												<li><i class="fa-li fa fa-phone "></i>(22) 225-56-98)k</li>
												<li><i class="fa-li fa fa-clock fa-spin"></i>24h</li>
												<li><i class="fa-li fa fa-envelope"></i>warszawa@plaguedoctor.pl</li>
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
										
										<p><span>&check;</span>    Brak Zainteresowania Pacjentami</p>
										
										<p><span>&check;</span>    Pracujemy Tylko Dla Kasy</p>
										
										<p><span>&check;</span>    Jedno Łóżko na Sześciu Pacjentów</p>
										<p><span>&check;</span>    Jeden Materac na Pięć Łóżek</p>
										
										<p><span>&check;</span>    Brak Toalety</p>
										
										<p><span>&check;</span>    Ogrzewania Działą Tylko Latem</p>
										
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78222.95320726107!2d20.92435091477276!3d52.21672759635601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd9cbe1766d5%3A0x7919f8d631c48ec8!2sSzpital!5e0!3m2!1spl!2spl!4v1638883258620!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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