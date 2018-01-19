
<?php session_start();
if(!isset($_SESSION['Zalogowany']))            
    header("location: ../View/index.php");
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
			 
		}
		li {
			display: inline;
				margin-right: 10px;
		}
		h4{
			background: rgb(33, 34, 34);
			
			
		}
		a{
			text-decoration:none;
		}
		
	</style>
</head>
<body>
	<header>
		<h1>ORKIESTRA ONLINE</h1>
		<form action="../Controller/controller.php?method=logoutUser" method="post">
		 	  <h4>
		  		 <ul class="menu">
 				 	<li><a href="default.asp">Wyświetl Zamówienia</a></li>
 			    	<li><a href="news.asp">Złóż Zamówienie</a></li>
 				 	<li><a href="contact.asp">Edytuj Profil</a></li>
					<li><a href="about.asp">Przeglądnij Orkiestrę</a></li>
					
					<li>
						<input type="submit" class="wyloguj" value="Wyloguj" />
				   </li>
				</ul>
			</h4>
			</form>
    </header>
	
	
	<div class="glownatresc">
		<div class="tlo">
			<div class="dolnybox2">
				<div class="nap">TO JEST TEN NAPIS!!!!!</div>
			</div>
		</div>	
	</div>
	  

</body>
</html>