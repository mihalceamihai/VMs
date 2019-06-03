<!DOCTYPE html>
<html lang="ro">

<head>

<title>AutoMosMobile | Editeaza detaliile contului</title>
<link rel="stylesheet" href="../css/csstema.css" type="text/css"/>
</head>

<body class="backgroundlogin">
	<header>
		<nav>
			<ul>
				<?php
				session_start();
				if(isset($_SESSION["auth"]) )
				{

					echo "<li><a href='acasa.php'>Acasa</a></li>";
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
			?>
			</ul>
		</nav>
		<img src="../logo/logor.png" class="logoo">
	</header>

	<div class="contnouu2">
		<form name="formdetaliicont"  method="POST" action="updatedetalii.php">
			<h1 id="h1detcont">Editeaza detaliile contului</h1>
			<hr>
			<img src="../unk.gif" class="profilpicture" width="90px" height="90px" >
			<br>
			<input type="submit" id="butonfotoprofil" value="Incarca o fotografie de profil!">
			<br>
			<br>
			<br>
			<br>
			<input type="text" name="prenume" id="cnprenume" placeholder="Prenume" >
			<input type="text" name="nume" id="cnnume" placeholder="Nume" > <br/>
			<input type="text" name="numeutilizator" id="cnusername" placeholder="<?php
																															echo $_SESSION["usr_name"];
			 																												?>" readonly>
			<input type="text" name="nrtelefon" id="cnnrtelefon" placeholder="Numar de telefon" ><br/>
			<input type="text" name="email" id="cnemail" placeholder="Adresa de e-mail" > <br/>
			<input type="text" name="adresadomiciliu" id="cnaddom" placeholder="Adresa de domiciliu" ><br/>
			<input type="password" name="parola" id="cnparola" placeholder="Parola (minim 8 caractere!)" >
			<input type="password" name="re_parola" id="cnre_parola" placeholder="Reintroduceti parola" >
			<div class="data_nasterii">
				<span style="font-size:20px";> Data nasterii </span><br>

				<select name="zi" id="cnzi">
				<option selected hidden value="">Ziua</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>

				<select name="luna" id="cnluna">
				<option selected hidden value="">Luna</option>
				<option value="1">Ianuarie</option>
				<option value="2">Februarie</option>
				<option value="3">Martie</option>
				<option value="4">Aprilie</option>
				<option value="5">Mai</option>
				<option value="6">Iunie</option>
				<option value="7">Iulie</option>
				<option value="8">August</option>
				<option value="9">Septembrie</option>
				<option value="10">Octombrie</option>
				<option value="11">Noiembrie</option>
				<option value="12">Decembrie</option>
				</select>

				<select name="an" id="cnan">

				<option >An</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
				<option value="1979">1979</option>
				<option value="1978">1978</option>
				<option value="1977">1977</option>
				<option value="1976">1976</option>
				<option value="1975">1975</option>
				<option value="1974">1974</option>
				<option value="1973">1973</option>
				<option value="1972">1972</option>
				<option value="1971">1971</option>
				<option value="1970">1970</option>
				<option value="1969">1969</option>
				<option value="1968">1968</option>
				<option value="1967">1967</option>
				<option value="1966">1966</option>
				<option value="1965">1965</option>
				<option value="1964">1964</option>
				<option value="1963">1963</option>
				<option value="1962">1962</option>
				<option value="1961">1961</option>
				<option value="1960">1960</option>
				<option value="1959">1959</option>
				<option value="1958">1958</option>
				<option value="1957">1957</option>
				<option value="1956">1956</option>
				<option value="1955">1955</option>
				<option value="1954">1954</option>
				<option value="1953">1953</option>
				<option value="1952">1952</option>
				<option value="1951">1951</option>
				<option value="1950">1950</option>
				<option value="1949">1949</option>
				<option value="1948">1948</option>
				<option value="1947">1947</option>
				<option value="1946">1946</option>
				<option value="1945">1945</option>
				<option value="1944">1944</option>
				<option value="1943">1943</option>
				<option value="1942">1942</option>
				<option value="1941">1941</option>
				<option value="1940">1940</option>

				</select>
			<br/>
			<input type="radio" name="gen" id="cngen" value="m">Barbat
			<input type="radio" name="gen" id="cngen" value="f">Femeie <br/>
			<input type="submit" value="Salveaza modificarile"> <br/>

			</div>
		</form>
	</div>

	<div class="improvfooter">
				<p>AutoMosMobile, Copyright &copy; 2018</p>
	</div>
</body>

</html>
