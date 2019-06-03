<!DOCTYPE html>
<html>

<head>

<title>AutoMosMobile | Acasa</title>
<link rel="stylesheet" href="../css/csstema.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<div  class="bg">
<header>
	<nav>

		<ul>
			<?php
			session_start();

			if(isset($_SESSION["auth"]) )
			{
				echo "<li class='userclass'><a href='#'>Bun venit,"; echo $_SESSION["usr_name"];  echo  "!</a></li>" ;
				echo "<li class='current'><a href='acasa.php'>Acasa</a></li>";
				echo "<li><a href='contact.php'>Contact</a></li>";
				echo "<li><a href='#'>Contul meu</a> ";
				echo "<ul>";
				echo "<li><a href='logout.php'>Log out!</a></li>";
				echo "<li><a href='detaliicont.php'>Editare</a></li>";
				echo "<li><a href='cos.php'>Cos</a></li>";
					echo "<li><a href='istoric.php'>Istoric</a></li>";
				echo "</ul>";
				echo "</li>";
			}
			else {
				echo "<li class='userclass'><a href='#'>Bun venit!</a></li>" ;
				echo "<li class='current'><a href='acasa.php'>Acasa</a></li>";
				echo "<li><a href='contact.php'>Contact</a></li>";
				echo "<li><a href='login.php?message=Introduceti credentialele!'>Login</a> ";
				echo "</li>";
			}
		?>
		</ul>
	</nav>
	<img src="../logo/logo.png" class="logoo"></img>
	<h1 id="h1start">E timpul pentru o noua masina?</h1>
	<p id="pstart">Cauta acum pe AutoMosMobile!</p>
</header>

<section>
		<div class="startbox">
				<button class="startbutton" ><i class="fa fa-car"></i>      Masini</button>
				<button class="startbutton"><i class="fa fa-motorcycle"></i>      Moto</button>
				<button class="startbutton"><i class="fa fa-gears"></i>      Piese</button>
				<hr id="hrstart">
					<form method="POST" action="listaremasini.php?pagina=3">
						<input type="text" name="acasamarca" placeholder="MARCA">
						<input type="text" name="acasamodel" placeholder="MODELUL">
						<input type="text" name="acasaan" placeholder="ANUL">
						<input type="text" name="acasacaroserie" placeholder="CAROSERIE">
						<input type="text" name="acasaip" placeholder="INDICE POLUARE">
						<input type="text" name="acasastare" placeholder="STARE">
						<input type="text" name="acasacomb" placeholder="COMBUSTIBIL">
						<input type="text" name="acasaviteze" placeholder="CUTIE VITEZE">
						 <input type="submit" nume="cautastart" value="Cauta" ></input>
					</form>
		</div>
</section>

</div>

<section id="boxes">
	<div class="containernou">

		<a href="listaremasini.php?caroserie_masina='Hatchback'&pagina=1">
		<div class="box">
			<img src="../boxes/hatchback.jpg">
			<h3>Hatchback</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Berlina'&pagina=1">
		<div class="box">
			<img src="../boxes/berlina.jpg">
			<h3>Berlina</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Combi'&pagina=1">
		<div class="box">
			<img src="../boxes/combi.jpg">
			<h3>Combi</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Van'&pagina=1">
		<div class="box">
			<img src="../boxes/van.jpg">
			<h3>Van</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='SUV'&pagina=1">
		<div class="box">
				<img src="../boxes/SUV.jpg">
				<h3>SUV</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Coupe'&pagina=1">
		<div class="box">
				<img src="../boxes/coupe.jpg">
				<h3>Coupe</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Cabrio'&pagina=1">
		<div class="box">
				<img src="../boxes/cabrio.jpg">
				<h3>Cabrio</h3>
		</div>
		</a>

		<a href="listaremasini.php?caroserie_masina='Autoutilitara'&pagina=1">
		<div class="box">
				<img src="../boxes/autoutilitara.jpg">
				<h3>Autoutilitara</h3>
		</div>
		</a>

	</div>
</section>


<section id="newsletter">
	<div class="containernou">
		<h1>Aboneaza-te la Newsletter</h1>
		<form>
			<input type="email" placeholder="Adresa ta de e-mail">
			<button type="submit" class="button_1">Abonare</button>
		</form>
	</div>
</section>




<footer>
			<p>AutoMosMobile, Copyright &copy; 2018</p>
</footer>

</body>
</html>
