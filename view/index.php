<?php
session_start();

if(isset($_SESSION['Zalogowany']) && $_SESSION['Zalogowany'])       
    header('Location: ../View/home.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zaloguj się</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/my.css">
	<style>
		header{
			background: rgb(116, 117, 117);
			text-align: center;
			font-family: Poppins-Bold;
  		    font-size: 24px;
  		    color: #333333;
            line-height: 1.2;
          
  
			 width: 100%;
   			display: block;
    		padding-bottom: 20px;
		}
	</style>
</head>
<body>
	<header>
		<h1>ORKIESTRA ONLINE</h1>
   	    <h3>Zamów swój koncert!</h3>
    </header>
  
	
	
	  
	<div class="glownatresc">
		<div class="tlo">
			<div class="dolnybox">
				<?php
  				   if(isset($_SESSION['Error']))
     			   echo $_SESSION['Error'];     
   				 ?>
				<form action="../controller/controller.php?method=loginUser" method=post class="napislogindiv validate-form">
					<span class="napislogin">
						Zaloguj Się
					</span>

					<div class="loginhasloinput validate-input" data-validate = "Wpisz właściwy login!">
						<input class="tekstinput" type="text" name="login" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="loginhasloinput validate-input" data-validate = "Hasło jest wymagane!">
						<input class="tekstinput" type="password" name="password" placeholder="Hasło">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="zapomniales">
							Zapomniałeś
						</span>
						<a class="loginhaslo" href="#">
							Loginu / Hasła?
						</a>
					</div>

					
					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Stwórz nowe muzyczne konto!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>	
	</div>
</body>
</html>