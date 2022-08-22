
<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

body {
  background-color: black;
}
.accordion {
  background-color: black;
  margin: 7px;

  color: silver;
  cursor: pointer;
  padding: 18px;
  width:50%;
  border: 1px;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;

}

.active, .accordion:hover {
  background-color: #050505; 
  color: #D10B0B;
  border-top-right-radius: 50px;
  border-top-left-radius: 50px;
  border-bottom-right-radius: 50px;
  border-bottom-left-radius: 50px;;
  
}

.panel {
  padding: 0 18px;
  display: none;
  background-color:black;
  overflow: hidden;
}

table, td, th {  
  border: 1px solid #595151;
  text-align: center;
  font-family: Helvetica, sans-serif;
  color: white;
  
}

table {
  border-collapse: collapse;
  width: 99%;
}

th, td {
  padding: 1px;
}
h2 {
  padding: 1px;
  color: silver;
  font-family: Helvetica, sans-serif;
}
a:link, a:visited {
  background-color:  black;
  color: silver;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
  border-top-right-radius: 40px;
  border-top-left-radius: 40px;
  border-bottom-right-radius:40px;
  border-bottom-left-radius: 40px;;

}

    

</style>
    <title>Panel Administratora</title>
    
</head>
<body>
    
<h2>Panel Administratora</h2>
<!--  WNIOSKI -->
<button class="accordion">ZARZĄDANIE WNIOSKAMI ZŁOŻONYMI PRZEZ KLIENTÓW</button>
<div class="panel">
<p>Złożone wnioski.</p>
  <table>
		<thead>
			<tr>
				<th>ID wniosku</th>
				<th>Login Użytkownika</th>
                <th>imię</th>
				<th>Nazwisko</th>
                <th>Uwagi</th>
                <th>Lekarz</th>
                <th>Klinika</th>
                <th>Data</th>
                <th>Robot</th>
                <th>Odpowiedź</th>
                <th>DECYZJA</th>
                
			</tr>
		</thead>
        <tbody>
                <?php
                include "db_settings.php";
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                $sql = "select * from visit ";               
                $result = $connection->query($sql) ;
                while($row = mysqli_fetch_array($result)){ ?>
                    
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['userlogin']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['whatspain']; ?></td>
                    <td><?php echo $row['doctors']; ?></td>
                    <td><?php echo $row['clinics']; ?></td>
                    <td><?php echo $row['visitdate']; ?></td>
                    <td><?php echo $row['robot']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                    <td><a href="admin_accept.php?id_wniosku=<?php echo $row['id'];?>">Akceptuj</a>
                    <a href="admin_visit_wait.php?id_wniosku=<?php echo $row['id'];?>">Niech Czeka</a>
                    <a href="admin_reject.php?id_wniosku=<?php echo $row['id'];?>">Odrzuć</a></td>      
                </tr>  
                <?php } ?>             
		</tbody>	
	</table>   
</div>
<!--    Users  -->
<button class="accordion">ZARZĄDZANIE KONTAMI UŻYTKOWNIKÓW</button>
<div class="panel">

<table>
		<thead>
			<tr>
				<th>ID Użytkownika</th>
				<th>Login Użytkownika</th>
                <th>Hasło uzytkownika</th>
				<th>Data utworzenia</th>    
                <th>Usuń</th>
			</tr>
		</thead>
        <tbody>
                <?php
                include "db_settings.php";
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                $sql = "select * from users ";               
                $result = $connection->query($sql) ;
                while($row = mysqli_fetch_array($result)){ ?>
                    
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><a href="admin_user_remove.php?id_wniosku=<?php echo $row['id'];?>">Usuń</a></td>      
                </tr>  
                <?php } ?>             
		</tbody>	
	</table> 
                </div>
<button class="accordion">BAZA PYTAŃ ZADANYCH PRZEZ KLIENTÓW</button>
<div class="panel">
 <!--    Contact Form  -->
<table>
		<thead>
			<tr>
				<th>ID Kontaktu</th>
				<th>E-mail Użytkownika</th>
                <th>imię</th>
				<th>Kategoria</th>
                <th>Priorytet</th>
                <th>Ubezpieczenie NFZ</th>
                <th>Kwatera na cmentarzu</th>
                <th>Pytanie</th>
                <th>Decyzja</th>
                
			</tr>
		</thead>
        <tbody>
                <?php
                include "db_settings.php";
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                $sql = "select * from contact_form ";               
                $result = $connection->query($sql) ;
                while($row = mysqli_fetch_array($result)){ ?>
                    
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['priority']; ?></td>
                    <td><?php echo $row['insurance_nfz']; ?></td>
                    <td><?php echo $row['place_in_cemetery']; ?></td>
                    <td><?php echo $row['question']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                    <td><a href="admin_constact_form_ignore.php?id_wniosku=<?php echo $row['id'];?>">Ignoruj</a>
                    <a href="admin_constact_form_thanks.php?id_wniosku=<?php echo $row['id'];?>">Podziękuj</a>
                    <a href="admin_constact_form_remove.php?id_wniosku=<?php echo $row['id'];?>">Usuń</a></td>      
                </tr>  
                <?php } ?>             
		</tbody>	
	</table>  
</div>

<button class="accordion">BAZA KLIENTÓW NEWSLETTER'A</button>
<div class="panel">
    <!--    Newsletter  -->
<table>
		<thead>
			<tr>
				<th>ID Newsletter</th>
				<th>E-mail Użytkownika</th>
                <th>Usuń</th>
                
			</tr>
		</thead>
        <tbody>
                <?php
                include "db_settings.php";
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                $sql = "select * from newsletter ";               
                $result = $connection->query($sql) ;
                while($row = mysqli_fetch_array($result)){ ?>
                    
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a href="admin_newsletter_remove.php?id_wniosku=<?php echo $row['id'];?>">Usuń</a><br>    
                </tr>  
                <?php } ?>             
		</tbody>	
	</table> 



</div>

<button class="accordion">PRZEGLĄD KONT ADMINISTRATORÓW</button>
<div class="panel">
  <!--    Admins  -->

  <table>
		<thead>
			<tr>
				<th>ID Administratora</th>
				<th>Login Administratora</th>
                <th>Hasło Administratora</th>
				<th>Data utworzenia</th>    
			</tr>
		</thead>
        <tbody>
                <?php
                include "db_settings.php";
                $connection = new mysqli($host, $db_user, $db_password, $db_name);
                $sql = "select * from admins ";               
                $result = $connection->query($sql) ;
                while($row = mysqli_fetch_array($result)){ ?>
                    
                <tr>
                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
     
                </tr>  
                <?php } ?>             
		</tbody>	
	</table> 
</div>

<button class="accordion">DODATKOWE OPCJE</button>
<div class="panel">
<a href="logout.php" class="button primary">Wyloguj</a>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<br>
    
</body>
</html>









