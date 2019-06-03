<!DOCTYPE html>
<html lang="ro">

<head>

<title>AutoMosMobile | Intra in cont!</title>
<link rel="stylesheet" href="../css/csstema.css" type="text/css"/>
</head>

<body>
<div class="backgroundlogin">
		<header>
			<nav>
			<ul>
				<?php
				session_start();
					$mesaj=$_GET['message'];
			  echo "<script type='text/javascript'>alert('$mesaj');</script>";

					echo "<li class='current'><a href='acasa.php'>Acasa</a></li>";
					echo "<li><a href='contact.php'>Contact</a></li>";
					echo "<li><a href='login.html'>Login</a> ";
					echo "</li>";

			?>
			</ul>
			</nav>
			<img src="../logo/logor.png" class="logoo">
		</header>

		<div class="loginbox">
			<img src="../avatar.png" class="avatar">
				<h1 id="h1login2">Autentifica-te!</h1>
				<form name="formlogin"  method="POST" action="logare.php">
					<p>Nume de utilizator</p>
					<input type="text" name="Username" placeholder="Enter Username">
					<p>Parola</p>
					<input type="password" name="Password" placeholder="Enter Password">
					<input type="submit" nume="Login" value="Autentificare">
					<a href="contnou.php" id="amcont" >Nu am inca un cont! Creeaza-l acum!</a>
					<p><a href="parolauitata.html" id="amcont" >Ati uitat parola?</a></p>
				</form>
			</img>
		</div>


		<div class="improvfooter">
					<p>AutoMosMobile, Copyright &copy; 2018</p>
		</div>

</div>

</body>

</html>
