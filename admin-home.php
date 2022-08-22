
<!-- CHECK ADMIN OR USER? (User go to index.php)(Admin go to admin-main-page) -->

<?php
// Initialize the session
session_start();
$name = ($_SESSION["username"]);

if(isset($_SESSION["loggedin"])  !== true){
    header("location: index.php");
    exit;
 }
 if ($name == "adm2" || $name=="adm1" && strlen($name)  == 4) {
     header("location: admin-main-page.php");
    exit;
 } 
 if (strlen($name)  >= 6) {
    header("location: not-admin.php");
    exit;
    }
 
?>








