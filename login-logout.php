<?php
						if(isset($_SESSION["loggedin"])  !== true){
							echo '<li><a href="login.php" class="button">Zaloguj</a></li>';
						 }
						 else {
							$name = ($_SESSION["username"]);
							echo '<li>';
							echo '<a href="#" class="button" >Witaj ' . $name .'</a>';
							echo '<ul>';
                            echo '<li><a href="visitAdd.php" class="button"> Twoje Wizyty </a> </li>';
							echo '<li><a href="reset-password.php" class="button">Zmień hasło</a></li>';
							echo '<li><a href="admin-page.php" class="button"> Dla Pracowników </a> </li>';
							echo '<li><a href="delete-account-page.php" class="button"> Usuń Konto </a> </li>';
							echo '<li><a href="logout.php" class="button primary">Wyloguj</a></li>';
							echo '</ul>';
						    echo '</li>';
						 }
								?>



            
            
            
            
         