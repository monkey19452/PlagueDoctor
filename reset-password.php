<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
							<h2>Resetowania hasła</h2>
						</header>
<body>
    <div class="wrapper">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label> <br></label>
                <input type="password" name="new_password" placeholder='Podaj Nowe Hasło' class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label><br> </label>
                <input type="password" name="confirm_password" placeholder='Powtórz Nowe Hasło' class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="button primary" value="Zatwierdź">
                <a class="button primary" href="welcome.php">Wróć</a>
            </div>
        </form>
    </div>    
</body>
<?php
    include 'footer-scripts.html';
?>
</html>