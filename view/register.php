<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rejestracja</title>
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
		padding-bottom: 20px;
	}
</style>
</head>
<body>
  	<header class="myheader">
    	<h1>ORKIESTRA ONLINE</h1>
    	
 	 </header>
	<div class="glownatresc">
		<div class="tlo">
			<div class="dolnybox">

					<span class="napislogin">
						Zarejestruj się
					</span>

                <div class="loginhasloinput validate-input">

                		 <form action="../controller/controller.php?method=insertUser" method=post>
							 <input class="tekstinput" type="text" placeholder="imie" name="Name" required autofocus />
						 	 <input class="tekstinput" type="text" placeholder="nazwisko" name="Last_Name"  required autofocus />
						 	 <input class="tekstinput" type="email" placeholder="email" name="Email" required />
							 <input class="tekstinput" type="text" placeholder="imie" name="Login" required autofocus />
						 	 <input class="tekstinput" type="password" placeholder="haslo" name="Password" required />
							 <input class="tekstinput" type="password" placeholder="powtorz haslo" name="Password2" required />

							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn">
									Zarejestruj
								</button>
							</div> 
                    </form>
                </div>
				
			</div>
		</div>	
	</div>
</body>
</html>



