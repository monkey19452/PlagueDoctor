
<?php session_start(); ?>
<?php
    
    include "db_settings.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if(isset($_POST["mail"])  )
        {
        $mail = $_POST["mail"];
      
       

        $sql = "insert into newsletter (email) values ('$mail')";
		
        $connection -> query($sql);
		header("location: newsletterPass.php");
		exit;
    }
?>



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








			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h1>Plague Doctor &reg; </h1>
							<p>Proponujemy naszym pacjentom najlepsze i sprawdzone<br>
							 na przestrzeni wieków średniowieczne metody leczenia.<br>
							 Śmiertelność w naszej klinice wynosi zaledwie 98%.</p>
						</header>
						<style>

img:hover, span.image {
  animation: shake 5.0s;
  animation-iteration-count: infinite;
  
}

@keyframes shake {
	0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
  
}
</style>
						<span class="image"><img src="images/logo.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/background_1.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h3>Innowacyjna metoda leczeniem według horoskopu</h3>
										<p>Jesteśmy jedyna kliniką spoza Sosnowca która stosuję tę technikę.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Nasi lekarze nie są obojętni wobec koncepcji mikrokosmosu i wpływu planet
										 na cały świat i na organizm człowieka. Dlatego jedną z najlepszych i sprawdzonych
										form leczenia w naszej klinice jest sporządzenie horoskopu pacjenta,
										 dokładne zbadanie jego chorych narządów i powiązanie choroby z bezpośrednim 
										 oddziaływaniem ciał astralnych.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Układ ciał niebieskich pozwalala rygorystycznie obliczać czas dogodny dla poważniejszych zabiegów,
										 ale także zabiegów kosmetycznych (takich jak obcinania włosów czy kąpieli).
										Odpowiedni układ ciał niebieskich zapewnia wybranie dogodnych miejsc do upuszczenia krwi.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/background_2.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Dbałość o każdego pacjenta.</h2>
							<p>(Nie dotyczy pacjentów na NFZ)</p>
						</header>
						<p>W naszym szpitalu panują idealne warunki: chorzy leżą nago po kilku w jednym łóżku (lub na podłodze),
							 nie są myci, a jedyną formą sprawowanej nad nimi opieki jest podawanie im jedzenia.
							  Zapewniamy chodzenie w nigdy nie pranych, zabłoconych ubraniach, nie mycie się i spanie we wspólnym łóżku 
							  – a wszystko to w otoczeniu mnożącego się robactwa.</p>
						<ul class="actions">
							<li><a href="more-hygiene.php" class="button">Dowiedz się więcej</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/background_3.png" alt="" /></span>
					<div class="content">
						<header>
							<h2>Upuszczanie krwi. Najwspanialsza terapia epoki</h2>
							<p>Upuszczanie krwi można stosować profilaktycznie, nawet gdy nie zaobserwowano żadnej konkretnej choroby. </p>
						</header>
						<p>Upuszczanie krwi prowadzi do schłodzenia i napowietrzenia ciała pacjenta
							 i zabezpiecza przed ewentualnymi przyszłymi chorobami – przygotowuje ciało
							  na mogące prowadzić do chorób zachwiania równowagi biologicznej i zmiany związane z porami roku.</p>
						<ul class="actions">
							<li><a href="more-blood.php" class="button">Dowiedz się więcej</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Zapraszamy wszystkich zdrowych i chorych!</h2>
							<p>Po opuszczeniu naszej kliniki już nic nigdy nie będzie takie samo.</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-chart-area"></span>
									<h3>Statystyki</h3>
									<p>W naszej klinice jeszcze nikt nie zmarł z przyczyn naturalnych. Statystyka nie kłamie</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-comment"></span>
									<h3>Porozmawiajmy</h3>
									<p>Rozmowa z naszymi pacjentami jest dla nas najważniejsza. Nie potrafimy leczyć, to chociaż sobie pogadamy.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-flask"></span>
									<h3>Laboratorium</h3>
									<p>W naszym laboratorium zatrudniamy najlepszych alchemików z Podlasia.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>Transport Medyczny</h3>
									<p>Zapewniamy darmowy transport z domu do kliniki oraz z kliniki na cmentarz.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>Umowa z NFZ</h3>
									<p>Posiadamy umowę z NFZ na dziedziczenie miejsca w kolejce do lekarza.  </p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>Bezpieczeństwo</h3>
									<p>Nasi pacjenci są zamykani na klucz oraz związywani pasami dla większej swobody.</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#" class="button">Do góry strony</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five Newsletter-->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Newsletter</h2>
							<p>Chcesz otrzymywać masę spamu oraz reklamy fotowoltaiki?<br>
						Już dziś zapisz się do naszego newslettera!</p>
						</header>

						<form  method="post" action="index.php" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="mail" id="mail" placeholder="Podaj Adres E-Mail" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="OK" class="fit primary" /></div>
							</div>
						</form>
		

					</div>
				</section>

<?php
    include 'footer-scripts.html';
?>
            

	</body>
</html>