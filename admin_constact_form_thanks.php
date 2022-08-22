<?php session_start(); ?>
<?php
    
    include "db_settings.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if(isset($_GET["id_wniosku"])  )
        {
        $answ = $_GET["id_wniosku"];
      
        $sql = "UPDATE contact_form SET answer='Dziękujemy. Zapraszamy ponownie.' WHERE id=$answ";
        $connection -> query($sql);
		header("location: admin-main-page.php");
		exit;
    }
?>