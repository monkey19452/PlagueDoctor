

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
                            <h2>Upuszczanie krwi</h2>
							<p><i>Flebotomia. Najbardziej mordercza terapia w dziejach ludzkości? </i></p>
						</header>

               
<!-- Content -->
<section id="content">          
                                <div style="text-align: center">
								<img src="images/blood.jpg" alt="" width="50%" height="50%" />
                                </div>

								<h3>Dlaczego?</h3>

								<p style="text-indent:40px;">Jeszcze do niedawna wierzono, że to idealny sposób na każde schorzenie, dolegliwość, nawet na zły humor.
                                 Krwawa terapia uchodziła za istne panaceum. Wierzono w nią przez tysiąclecia. I przez tysiąclecia przynosiła śmierć milionom nieszczęśników.
                                 Początkowo upuszczanie krwi wykonywali często przedstawiciele kleru – ich pacjentami byli zarówno duchowni, jak i świeccy. Mnisi i księża zobowiązani
                                  byli do życia w celibacie, a krwioupusty zdawały się dodatkowo ograniczać ich libido (taka dawna anty-viagra!). W 1163 roku papież Aleksander III zakazał klerowi
                                   studiowania nauk poświęconych ludzkiej fizyczności. Kanon głosił, że „Kościół brzydzi się krwią”, dlatego duchownym nie było już wolno wykonywać żadnych operacji,
                                    przeprowadzać upuszczania krwi ani studiować anatomii. W Anglii ich rolę przejęli balwierze. Osoba wykonująca krwioupusty wąchała upuszczoną 
                                    krew, badała jej konsystencję dotykiem i smakowała ją (w tym miejscu podnosimy zbiorowe „łeeee”…), aby postawić diagnozę. Do czasu wydania
                                     przepisu, który nakazywał im dyskretne wylewanie krwi do Tamizy, balwierze wabili klientów ustawiając miski z krwią na parapetach swoich okien. </p>
								
                                <h3>George Washington wykrwawił się na przeziębienie</h3>
								<p style="text-indent:40px;"> Słynną ofiarą upuszczania krwi został George Washington. Trzy lata po zakończeniu prezydentury przeziębił się,
                                 jeżdżąc konno w śnieżnej zawierusze: gorączkował i miał problemy z oddychaniem, prawdopodobnie spowodowane ostrym zapaleniem nagłośni. Lekarze 
                                 upuszczali mu znaczne ilości krwi, wmuszali w niego napój z melasy, octu i masła (którym zadławił się niemal na śmierć), wywoływali pęcherze,
                                  znowu upuszczali krew, podawali mu środki przeczyszczające oraz wymiotne, a potem na dokładkę zafundowali prezydentowi kolejny krwioupust. Śmierć 
                                  George’a Washingtona. Obraz z 1799 roku. Następnego dnia upuścili mu jeszcze trochę krwi. Łącznie Washington stracił od około 2 do nawet ponad
                                   4 litrów krwi i wkrótce potem zmarł. Dość wysoka cena, jak na chorobę, która zaczęła się od przeziębienia. (…)
                                </p>
								<h3>Tysiąclecia ignorowania… głosu rozsądku</h3>
                                <p style="text-indent:40px;"> Mimo że upuszczanie krwi przez ponad dwa tysiąclecia należało do ulubionych metod lekarzy, nigdy nie brakowało krytyków tej metody
                                 pokroju wspomnianego Cobbetta. Erasistratos uważał, że utrata krwi osłabiłaby pacjenta (miał rację). W XVII wieku włoski uczony nazwiskiem Ramazzini pisał: 
                                 „Można odnieść wrażenie, że flebotomiści [osoby zajmujące się upuszczaniem krwi] ujęli w ręce miecz delficki, by urządzić rzeź niewiniątek”.Już w wiekach XVIII 
                                 i XIX sprzeciw wielu lekarzy i uczonych wobec krwioupustów zaczął zmieniać bieg rzeczy. Louis Pasteur i Robert Koch dowiedli, że źródłem stanów zapalnych są infekcje 
                                 i że nie da się ich wyleczyć upuszczaniem krwi. W 1855 roku John Hughes Bennett, lekarz z Edynburga, odwołując się do statystyk wykazał, że umieralność z powodu 
                                 zapalenia płuc spadła, gdy ograniczono zabiegi upuszczania krwi. Wraz ze wzrostem wiedzy na temat ludzkiej fizjologii oraz patologii Zachód zaczął odchodzić od 
                                 przestarzałych praktyk mających swe źródła w założeniach medycyny humoralnej. 
                                </p>
                               
</section>




<?php
    include 'footer-scripts.html';
?>

	</body>
</html>