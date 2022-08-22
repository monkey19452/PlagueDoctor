<?php
// Initialize the session
session_start();
$login = $_SESSION['username'];
$un = htmlspecialchars($_SESSION["username"]);
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<?php
include "db_settings.php";
$connection = new mysqli($host, $db_user, $db_password, $db_name);
if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["pain"]) && isset($_POST["doctor"])  && isset($_POST["clinic"])  && isset($_POST["date"])&& isset($_POST["robot"])  )
        {
        
        $userlogin = $login ;
        $fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$pain = $_POST["pain"];
		$doctor = $_POST["doctor"];
		$clinic = $_POST["clinic"];
		$date = $_POST["date"];
		$robot = $_POST["robot"];
        $u = $un;
        
        $sql = "insert into visit (userlogin, firstname, lastname, whatspain, doctors, clinics, visitdate, robot, currentus ) values 
        ('$userlogin','$fname','$lname','$pain','$doctor','$clinic','$date','$robot', '$userlogin')";
        $connection -> query($sql);
	
        header("location: visitAddpass.php");
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
    <script>
        function openTab(tabs) {
        var i;
        var x = document.getElementsByClassName("visit");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
    document.getElementById(tabs).style.display = "block";  
    }
    </script>
    
    <style> 
div.a, input, label [type=text]  {
  background:  #1c1d26;
  width: 50%;
  height: 22%;
  padding: 5px 10px;
  margin-left: auto;
  margin-right: auto;
  box-sizing: padding-box;
  border: 1px;
  border-bottom: 2px ;
}
h1 {
    font-family: "Sofia", sans-serif;
    font-size: 50px;
    color:#c2c2c2;
    text-indent:40px;
}
div.x, p.q, h2 {
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
table.alt {
    font-size: 18px;
    color:#c2c2c2;
    margin: auto;
    width: 60%;
    }
th {
    border: 2px solid black;
    border-collapse: collapse;
    border-style: groove;
    border-color:#a1a1a1;
}

</style> 
</head>

<body class="is-preload landing">
    <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
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
<body>
<div id="main" class="wrapper style1">
	    <div class="container">
	    <header class="major">
            <div class="x">
                <a href="visitAdd.php" class="button primary"> Twoje wizytyę </a>
                <a href="reset-password.php" class="button"> Zmień hasło </a>
                <a href="delete-account-page.php" class="button"> Usuń Konto </a>
                <a href="javascript:alert('Stąd nie można się wypisać...');" class="button"> Wypis ze szpitala </a>
                <a href="logout.php" class="button"> Wyloguj się </a>
            </div> 
                <br>
					<h2>Umówienie wizyty</h2>
                        <img src="images/logo.jpg" class="avatar">
                        <br><br>
                        <p class="q">Użytkownik:<br><?php echo $login; ?></p>
                        
                        
	</header>
<div class="x">
  <button class="button" onclick="openTab('requestVisit')">Wypełnij wniosek o wizytę</button>
  <button class="button" onclick="openTab('maybeAcceptVisit')">Wnioski czekające na akceptację </button>
  <button class="button" onclick="openTab('allVisit')">Odpowedzi na Twoje wnioski</button>
</div>

<!-- Div_1   -->
 <div id="requestVisit" class="visit">
    <br>
  <p class = "q">Umów się na wizytę.</p>
  <p class = "q">W tym celu wypełnij poniższy formularz:</p>


  <section>

<div>
    <form action = "visitAdd.php" method="post">

    <div class="a">
        <input type="text" id="fname" name="fname" placeholder="✎ Proszę pisać imię...">
    </div>

    <div class="a">
        <input type="text" id="lname" name="lname" placeholder="✎ Proszę pisać nazwisko...">
    </div>

    <div class="a">
        <input type="text" id="pain" name="pain" placeholder="✎ Proszę pisać co Cię boli...">
    </div>
    
    <div class="a">
        <p class="q"><br>Proszę wybrac Lekarza i Klinikę: </p>
    	<select name="doctor" id="doctor" >
		    <option value="alban">Doktor Alban</option>
		    <option value="dre">Doktor Dre</option>
		    <option value="oetker">Doktor Oetker</option> 
	    </select>
    </div>  
    <div class="a">  
    	<select name="clinic" id="clinic" >
		    <option value="warszawa">Warszawa</option>
		    <option value="gdansk">Gdańsk</option>
		    <option value="poznan">Poznań</option> 
            <option value="krakow">Kraków</option> 
	    </select>
    </div>   

   

    <div class="a">
        <input type="date" id="date" name="date" placeholder="Data Wizyty" >
        <input type="checkbox" id="robot" name="robot"><label for="robot">Nie jestem robotem?</label>
										
        <button type="submit" class="button primary">Wyślij</button> 
    </div>                            
</form>														
  </section>
</div>



</div>

<!-- Div_2   -->
<div id="maybeAcceptVisit" class="visit" style="display:none">
<br>
<section>
<p class = "q">Tutaj znajdują się wszystkie Twoje wnioski oczekujące na odpowiedź.</p>
	<table class="alt">
		<thead>
			<tr>
				<th>ID wniosku</th>
                <th>Login</th>
				<th>imię</th>
				<th>Nazwisko</th>
                <th>Uwagi</th>
                <th>Lekarz</th>
                <th>Klinika</th>
                <th>Data</th>
                <th>Status</th>
			</tr>
		</thead>
        <tbody>
        <?php      

                    $sql = "(select * from visit where userlogin='" . $login . "' AND answer='oczekuje' )" ;
                    $result = $connection->query($sql);
                    while($row = mysqli_fetch_row($result)){           
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td>{$row[4]}</td>";
                    echo "<td>{$row[5]}</td>";
                    echo "<td>{$row[6]}</td>";
                    echo "<td>{$row[7]}</td>";
                    echo "<td>{$row[10]}</td>";
                    echo "</tr>";
                    }?>        
		</tbody>	
	</table>
    <br><br>
</section>
</div>


<!-- Div_3   -->
<div id="allVisit" class="visit" style="display:none">
<br>
    <section>
    <p class = "q">Tutaj znajdują się wnioski zaakceptowane i odrzucone przez administratora</p>

  <table class="alt">
		<thead>
			<tr>
				<th>ID wniosku</th>
                <th>Login</th>
				<th>imię</th>
				<th>Nazwisko</th>
                <th>Uwagi</th>
                <th>Lekarz</th>
                <th>Klinika</th>
                <th>Data</th>
                <th>Status</th>
			</tr>
		</thead>
        <tbody>
        <?php      

                    $sqll = "(select * from visit where (userlogin='" . $login . "' AND answer='Zaakceptowana') OR (userlogin='" . $login . "' AND answer='odrzucona') )" ;
                    $result = $connection->query($sqll);
                    while($row = mysqli_fetch_row($result)){           
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td>{$row[4]}</td>";
                    echo "<td>{$row[5]}</td>";
                    echo "<td>{$row[6]}</td>";
                    echo "<td>{$row[7]}</td>";
                    echo "<td>{$row[10]}</td>";
                    echo "</tr>";
                    }?>        
		</tbody>	
	</table>
    <br><br>






</div>

       

</body>
    
<?php
    include 'footer-scripts.html';
?>
</html>