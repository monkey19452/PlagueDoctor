
<!-- FIRST MENU ADMIN PAGE-->
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
            </header>
    </div>
    <!-- Main -->
<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
            <h2>Panel Administratora</h2>
			<p><i>Zaloguj aby kontynuować<br>albo wróć do strony głównej</i></p>
		</header>


<style>
    div.z {
    text-align: center;
    }
</style>

    
    <br>
    <div class="z">
        <a href="admin-login-page.php" class="button primary"> Kontynuuj Jako Administrator</a>
        <a href="index.php" class="button primary"> Wróć Do Strony Głównej </a>
    </div> 
    <br>
    <br>
    <br>



<?php
    include 'footer-scripts.html';
?>

	</body>
</html>