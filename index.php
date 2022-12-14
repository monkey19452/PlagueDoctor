
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
                                <a href="#">Plac??wki</a>
                                <ul>
                                    <li><a href="warszawa.php">Warszawa</a></li>
                                    <li><a href="krakow.php">Krakow</a></li>
                                    <li><a href="poznan.php">Pozna??</a></li>
                                    <li><a href="gdansk.php">Gda??sk</a></li>
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
							 na przestrzeni wiek??w ??redniowieczne metody leczenia.<br>
							 ??miertelno???? w naszej klinice wynosi zaledwie 98%.</p>
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
										<h3>Innowacyjna metoda leczeniem wed??ug horoskopu</h3>
										<p>Jeste??my jedyna klinik?? spoza Sosnowca kt??ra stosuj?? t?? technik??.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Nasi lekarze nie s?? oboj??tni wobec koncepcji mikrokosmosu i wp??ywu planet
										 na ca??y ??wiat i na organizm cz??owieka. Dlatego jedn?? z najlepszych i sprawdzonych
										form leczenia w naszej klinice jest sporz??dzenie horoskopu pacjenta,
										 dok??adne zbadanie jego chorych narz??d??w i powi??zanie choroby z bezpo??rednim 
										 oddzia??ywaniem cia?? astralnych.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Uk??ad cia?? niebieskich pozwalala rygorystycznie oblicza?? czas dogodny dla powa??niejszych zabieg??w,
										 ale tak??e zabieg??w kosmetycznych (takich jak obcinania w??os??w czy k??pieli).
										Odpowiedni uk??ad cia?? niebieskich zapewnia wybranie dogodnych miejsc do upuszczenia krwi.</p>
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
							<h2>Dba??o???? o ka??dego pacjenta.</h2>
							<p>(Nie dotyczy pacjent??w na NFZ)</p>
						</header>
						<p>W naszym szpitalu panuj?? idealne warunki: chorzy le???? nago po kilku w jednym ??????ku (lub na pod??odze),
							 nie s?? myci, a jedyn?? form?? sprawowanej nad nimi opieki jest podawanie im jedzenia.
							  Zapewniamy chodzenie w nigdy nie pranych, zab??oconych ubraniach, nie mycie si?? i spanie we wsp??lnym ??????ku 
							  ??? a wszystko to w otoczeniu mno????cego si?? robactwa.</p>
						<ul class="actions">
							<li><a href="more-hygiene.php" class="button">Dowiedz si?? wi??cej</a></li>
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
							<p>Upuszczanie krwi mo??na stosowa?? profilaktycznie, nawet gdy nie zaobserwowano ??adnej konkretnej choroby. </p>
						</header>
						<p>Upuszczanie krwi prowadzi do sch??odzenia i napowietrzenia cia??a pacjenta
							 i zabezpiecza przed ewentualnymi przysz??ymi chorobami ??? przygotowuje cia??o
							  na mog??ce prowadzi?? do chor??b zachwiania r??wnowagi biologicznej i zmiany zwi??zane z porami roku.</p>
						<ul class="actions">
							<li><a href="more-blood.php" class="button">Dowiedz si?? wi??cej</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Zapraszamy wszystkich zdrowych i chorych!</h2>
							<p>Po opuszczeniu naszej kliniki ju?? nic nigdy nie b??dzie takie samo.</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-chart-area"></span>
									<h3>Statystyki</h3>
									<p>W naszej klinice jeszcze nikt nie zmar?? z przyczyn naturalnych. Statystyka nie k??amie</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-comment"></span>
									<h3>Porozmawiajmy</h3>
									<p>Rozmowa z naszymi pacjentami jest dla nas najwa??niejsza. Nie potrafimy leczy??, to chocia?? sobie pogadamy.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-flask"></span>
									<h3>Laboratorium</h3>
									<p>W naszym laboratorium zatrudniamy najlepszych alchemik??w z Podlasia.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>Transport Medyczny</h3>
									<p>Zapewniamy darmowy transport z domu do kliniki oraz z kliniki na cmentarz.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>Umowa z NFZ</h3>
									<p>Posiadamy umow?? z NFZ na dziedziczenie miejsca w kolejce do lekarza.  </p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>Bezpiecze??stwo</h3>
									<p>Nasi pacjenci s?? zamykani na klucz oraz zwi??zywani pasami dla wi??kszej swobody.</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#" class="button">Do g??ry strony</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five Newsletter-->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Newsletter</h2>
							<p>Chcesz otrzymywa?? mas?? spamu oraz reklamy fotowoltaiki?<br>
						Ju?? dzi?? zapisz si?? do naszego newslettera!</p>
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