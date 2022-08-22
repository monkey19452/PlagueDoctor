<?php session_start(); ?>
<?php
include "db_settings.php";
$connection = new mysqli($host, $db_user, $db_password, $db_name);
if(isset($_POST["nameForm"]) && isset($_POST["mailForm"]) && isset($_POST["categoryForm"]) && isset($_POST["priorityForm"])  && isset($_POST["insurance_nfzForm"])  && isset($_POST["place_in_cemeteryForm"])&& isset($_POST["questionForm"])  )
        {
	
        $nameForm = $_POST["nameForm"];
		$mailForm = $_POST["mailForm"];
		$categoryForm = $_POST["categoryForm"];
		$priorityForm = $_POST["priorityForm"];
		$insurance_nfzForm = $_POST["insurance_nfzForm"];
		$place_in_cemeteryForm = $_POST["place_in_cemeteryForm"];
		$questionForm = $_POST["questionForm"];

        $sql = "insert into contact_form (name, email, category, priority, insurance_nfz, place_in_cemetery, question) values ('$nameForm','$mailForm','$categoryForm','$priorityForm','$insurance_nfzForm','$place_in_cemeteryForm','$questionForm')";
	
		
        $connection -> query($sql);
		header("location: formPass.php");
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
			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Zadaj Pytanie</h2>
							<p>Proszę nie zadawać trudnych pytań.</p>
						</header>

			<!-- Form -->
							<section>
								<h3>Formularz kontaktowy</h3>
								<p> Aby się z nami skontaktować musisz mieć ubezpieczenie w NFZ oraz wykupione miejsce na cmentarzu.</p>
								<form method="post" action="form.php">
									<div class="row gtr-uniform gtr-50">

										<div class="col-6 col-12-xsmall">
											<input type="text" name="nameForm" id="nameForm"  placeholder="Twoje imię" />
										</div>

										<div class="col-6 col-12-xsmall">
											<input type="email" name="mailForm" id="mailForm"  placeholder="Email" />
										</div>

										<div class="col-6 col-12-xsmall">
											<select name="categoryForm" id="categoryForm">
												<option value="Jakosc uslug">Jakość usług</option>
												<option value="Ceny uslug">Ceny usług</option>
												<option value="Skarga">Skarga</option>
												<option value="Inne">Inne</option>
											</select>
										</div>

										<div class="col-6 col-12-xsmall">
											<select name="priorityForm" id="priorityForm">
												<option value="Niski">Niski Priorytet</option>
												<option value="Sredni">Średni Priorytet</option>
												<option value="Wysoki">Wysoki Priorytet</option> 
											</select>
										</div>

										<div class="col-6 col-12-medium">
											<input type="checkbox" id="insurance_nfzForm" name="insurance_nfzForm">
											<label for="insurance_nfzForm">Czy masz ubezpieczenie w NFZ?</label>
										</div>

										<div class="col-6 col-12-medium">
											<input type="checkbox" id="place_in_cemeteryForm" name="place_in_cemeteryForm" checked>
											<label for="place_in_cemeteryForm">Czy masz wykupione miejsce na cmentarzu?</label>
										</div>

										<div class="col-12">
											<textarea name="questionForm" id="questionForm" placeholder="Proszę pisać...." rows="6"></textarea>
										</div>

										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Wyślij" class="primary" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>


<?php
    include 'footer-scripts.html';
?>

	</body>
</html>