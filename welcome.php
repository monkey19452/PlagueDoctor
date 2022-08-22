

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
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
<style>
    div.x, p.q {
        text-align: center;
    }
    img {
        color: #c2bcbc;
    }
    .avatar {
        vertical-align: middle;
        width: 15%;
        height: 15%;
        border-radius: 50%;
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
    }
    h2 {
                text-align: center;
    }   
   
    </style>

<body>
<div id="main" class="wrapper style1">
	    <div class="container">
	    <header class="major">
            <div class="x">
                <a href="visitAdd.php" class="button primary"> Twoje wizyty </a>
                <a href="reset-password.php" class="button"> Zmień hasło </a>
                <a href="delete-account-page.php" class="button"> Usuń Konto </a>
                <a href="javascript:alert('Stąd nie można się wypisać...');" class="button"> Wypis ze szpitala </a>
                <a href="logout.php" class="button"> Wyloguj się </a>
            </div> 
                <br>
					<h2>Strefa Pacjenta</h2>
                        <img src="images/logo.jpg" class="avatar">
                        <br><br>
                        <p class="q">Użytkownik:<br><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
	</header>
        
    
</body>
<?php
    include 'footer-scripts.html';
?>
</html>