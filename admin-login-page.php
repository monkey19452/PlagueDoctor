
<!-- ADMIN LOGIN PAGE -->

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
   
        header("location: admin-home.php");
        exit;

}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Wprowadź nazwę użytkownika.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Wprowadź hasło.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM admins WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["upr"] = $upr;                           
                            
                            // Redirect user to welcome page
                            header("location: admin-home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Nieprawidłowe hasło lub nazwa użytkownika.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Nieprawidłowe hasło lub nazwa użytkownika.";
                }
            } else{
                echo "Oops! Coś poszło nie tak. Spróbuj ponownie później.";
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
    <title>Plague Doctor - Admin</title>
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
							<h2>Logowanie</h2>
							<p><i>Zaloguj się na konto administratora.</i></p>
						</header>

                        <style>
        div.x, p.q {
            text-align: center;
    }
    </style>

    <p class="q"> Ta część aplikacji przeznaczona jest tylko dla pracowników.<br> Wprowadź poprawne dane logowania.</p>

                        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

  

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label><br> </label>
                <input type="text" placeholder="Wprowadź login Administratora" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            
            <div class="form-group">
                <label> <br></label>
                <input type="password" placeholder="Wprowadź hasło administratora" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="button primary" value="Zaloguj">
            </div>
            <br> 
        </form>

        <div class="x">
            <a href="index.php" class="button primary"> Powrót do strony głównej </a>
        </div>
        <br>
        

<?php
    include 'footer-scripts.html';
?>

	</body>
</html>
