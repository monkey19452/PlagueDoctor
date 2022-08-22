
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
							<h2>Logopeda</h2>
							<p><i>"Primus non nocere"</i></p>
						</header>
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Dr Dre</h3>
											<p>Pełne Imię i Nazwisko: <i>"Doktor Andrzej Dre"</i></p>
											<footer>
												<ul class="actions">
													<li><a href="more-doc.php" class="button">Dowiedz się więcej</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<section>
											<a href="#" class="image fit"><img src="images/dre.jpg" alt="" /></a>
										
										
											<ul class="fa-ul">
												<li><i class="fa-li fa fa-home "></i>Portowa 11</li>
												<li><i class="fa-li fa fa-city "></i>84-150 Hel</li>
												<li><i class="fa-li fa fa-phone "></i>(58)307-81-23</li>
												<li><i class="fa-li fa fa-clock fa-spin"></i>8.00 - 16.00</li>
												<li><i class="fa-li fa fa-envelope"></i>dre@plaguedoctor.pl</li>
											  </ul>
											

											<footer>
												<ul class="actions">
													<li><a href="welcome.php" class="button">Umów Wizytę</a></li>
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
										<h3>WYKSZTAŁCENIE:</h3>
										<p><span>&check;</span>    PWSZ w Radomiu</p>
										<h3>UZYSKANE SPECJALIZACJE:</h3>
										<p><span>&check;</span>    Urologia Stosowana</p>
										<h3>DOŚWIADCZENIE ZAWODOWE:</h3>
										<p><span>&check;</span>    Osiem lat w Zakładzie Karnym w Sztumie</p>
										<p><span>&check;</span>    Dziewięć Lat w Zakładzie Karnym w Sosnowcu</p>
										<h3>DODATKOWE UMIEJĘTNOŚCI/ SPECJALIZACJE:</h3>
										<p><span>&check;</span>    Regeneracja Turbosprężarek</p>
										<h3>KOMUNIKACJA W JĘZYKU:</h3>
										<p><span>&check;</span>    Język angielski (niepiśmienny)</p>
										
										
										<h3>Czym się zajmuje? </h3>
										<ul>
											<li> Ma Alzhaimera, codziennie okrada swój własny dom  </li>
											<li> Leczy rękoma które leczą  </li>
											<li> Czyta horoskopy </li>
											<li> Leczy wady postawy  </li>
											<li> Operuje na otwartm sercu z zamkniętymi oczami</li>
										</ul>



										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.94623206782774!2d18.79966725212461!3d54.608406647927026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0682526b2ea1%3A0xf80796913a84bf11!2sPortowa%2011%2C%2084-150%20Hel!5e0!3m2!1spl!2spl!4v1638806328247!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										
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