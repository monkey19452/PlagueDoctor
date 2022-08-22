<?php
include "db_settings.php";
session_start();

$connection = new mysqli($host, $db_user, $db_password, $db_name);
$name = ($_SESSION["username"]);

    $sql = "DELETE FROM users WHERE username=$name";

$connection -> query($sql);


session_destroy();
// Redirect to login page
//header("location: logout-page.php");
//exit;
?>


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
                            <h2>Usuwanie Konta</h2>
						</header>

               
<!-- Content -->
<section id="content">        
<style>
    div.x, p.q {
        text-align: center;
    }
   
    </style>

        <p class="q">Twoje konto zostało usunięte.</p>
        <br>
        <div class="x">
            <a href="index.php" class="button primary"> Powrót do strony głównej </a>
            <a href="register.php" class="button primary"> Zarejestruj się </a>
        </div>          

        <br>
        <br>
        <br>    

                               
</section>




<?php
    include 'footer-scripts.html';
?>

	</body>
</html>
