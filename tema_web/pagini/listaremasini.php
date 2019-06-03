<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>AutoMosMobile | Pagina Produse</title>
    <link rel="stylesheet" href="../css/css2tema.css">
  </head>
  <body>

    <header>
        <nav>
          <ul>
            <?php
            session_start();
            if(isset($_SESSION["auth"]) )
            {

              echo "<li><a href='acasa.php'>Acasa</a></li>";
              echo "<li class='current'><a href='contact.php'>Contact</a></li>";
              echo "<li><a href='#'>Contul meu</a> ";
              echo "<ul>";
              echo "<li><a href='logout.php'>Log out!</a></li>";
              echo "<li><a href='detaliicont.php'>Editare</a></li>";
              echo "<li><a href='cos.php'>Cos</a></li>";
              echo "</ul>";
              echo "</li>";
            }
            else {

              echo "<li ><a href='acasa.php'>Acasa</a></li>";
              echo "<li class='current'><a href='contact.php'>Contact</a></li>";
              echo "<li><a href='login.php'>Login</a> ";
              echo "</li>";
            }
          ?>
        	</ul>
        </nav>

        <div id="logo">
          <img src="../logo/logoorange.png" alt="logo">
        <div>

    </header>

    <section id="showcase">
      <div class="container">
        <h1>E timpul pentru o nouă mașină?</h1>
        <p >Cauta acum pe AutoMosMobile in peste 100 de anunturi de automobile! </p>
      </div>
    </section>

    <section id="filters">
      <div class="container">
        <h1>Ordoneaza dupa:<h1>
          <form method="POST" action="filtrare.php">
            <select class="filtru">
              <option value="pret" name="listpret" style="visibility: hidden">Pret</option>
              <option value="cresc">Pret crescator</option>
              <option value="desc">Pret descrescator</option>
            </select>
            <select class="filtru" name="liststare">
              <option value="stare">Stare</option>
              <option value="nou">Nou</option>
              <option value="sh">Second</option>
            </select>
            <select class="filtru" name="listmarca">
              <option>Marca</option>
              <option value="Audi">Audi</option>
              <option value="BMW">BMW</option>
              <option value="Jaguar">Jaguar</option>
              <option value="Lexus">Lexus</option>
              <option value="Mazda">Mazda</option>
              <option value="Nissan">Nissan</option>
              <option value="Porsche">Porsche</option>
              <option value="Renault">Renault</option>
              <option value="Seat">Seat</option>
              <option value="Skoda">BMW</option>
              <option value="Tesla">Tesla</option>
              <option value="Volkswagen">Volkswagen</option>
            </select>
            <select class="filtru" name="listcaroserie">
    				  <option>Caroserie</option>
    				  <option value="Combi">Combi</option>
    				  <option value="Van">Van</option>
    				  <option value="Cabrio">Cabrio</option>
    	        <option value="SUV">SUV</option>
    				  <option value="Autoutilitara">Autoutilitara</option>
    			    <option value="Coupe">Coupe</option>
    				  <option value="Berlina">Berlina</option>
    				  <option value="Hatchback">Hatchback</option>
    				</select>
            <select class="filtru" name="listip">
              <option>Indice de poluare</option>
              <option value="1">Euro 1</option>
              <option value="2">Euro 2</option>
              <option value="3">Euro 3</option>
              <option value="4">Euro 4</option>
              <option value="5">Euro 5</option>
              <option value="Euro6">Euro 6</option>
            </select>
            <select class="filtru" name="listcomb">
              <option>Combustibil</option>
              <option value="Benzina">Benzina</option>
              <option value="Diesel">Diesel</option>
              <option value="Electric">Electric</option>
            </select>
            <select class="filtru" name="listcutvit">
              <option value="Cutie_viteze">Cutie viteze</option>
              <option value="Manuala">Manuala</option>
              <option value="Automata">Automata</option>
            </select>
            <br/> <br/>
            <button type="submit" class="buton_cautare">Cauta</button>
          </form>
      </div>
    </section>


    <section id="boxes">
      <div class="container">

        <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "automosmobile";
        $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

        //Partea de filtrare\

        $parameters="";
        $pag=$_GET['pagina'];
        echo "<script type='text/javascript'>alert($pag);</script>";

          if(($_GET['pagina'])=='1') {
            $caroserie2=$_GET['caroserie_masina'];
            echo "<script type='text/javascript'>alert($caroserie2);</script>";
            $parameters=$parameters."Caroserie=".$caroserie2;
            }
        else if(($_GET['pagina'])=='2') {
            $parameters=$_GET['para'];
            }
        else if(($_GET['pagina'])=='4'){
          $mesaj=$_GET['mes'];
          echo "<script type='text/javascript'>alert('$mesaj');</script>";
          $parameters=$_GET['param'];
        }  else {

        $marca=$_POST['acasamarca'];
        $model=$_POST['acasamodel'];
        $anfabr=$_POST['acasaan'];
        $caroserie=$_POST['acasacaroserie'];
        $indice_pol=$_POST['acasaip'];
        $stare=$_POST['acasastare'];
        $combustibil=$_POST['acasacomb'];
        $cut_viteze=$_POST['acasaviteze'];

        if(!(trim($marca)=='')) //marca
        {
          $parameters=$parameters."Marca='".$marca."'";
        } //ma intereseaza daca a fost sau nu setat deja un parametru pt a stii daca mai pun "AND" sau nu cand voi face query-ul

        if (!(trim($model)==''))
        { if(!(trim($marca)=='')) //model
          {
          $parameters=$parameters." AND Model='".$model."'";
          }
          else {
              $parameters=$parameters."Model='".$model."'";
            }
        }

        if(!(trim($anfabr)==''))
        { if(!(trim($parameters)=='')) //anul fabricatiei
          {
            $parameters=$parameters." AND An_fabricatie='".$anfabr."'";
          }
          else {
            $parameters=$parameters."An_fabricatie='".$anfabr."'";
          }
        }

        if(!(trim($caroserie)=='')) //CAROSERIE
        { if(!(trim($parameters)==''))
          {
            $parameters=$parameters." AND Caroserie='".$caroserie."'";
          }
          else {
            $parameters=$parameters."Caroserie='".$caroserie."'";
          }
        }

        if(!(trim($indice_pol)=='')) //Indice poluare
        { if(!(trim($parameters)==''))
          {
            $parameters=$parameters." AND Indice_poluare='".$indice_pol."'";
          }
          else {
            $parameters=$parameters."Indice_poluare='".$indice_pol."'";
          }
        }

        if(!(trim($stare)=='')) //STARE
        { if(!(trim($parameters)==''))
          {
            $parameters=$parameters." AND Stare='".$stare."'";
          }
          else {
            $parameters=$parameters."Stare='".$stare."'";
          }
        }

        if(!(trim($combustibil)=='')) //combustibil
        { if(!(trim($parameters)==''))
          {
            $parameters=$parameters." AND Combustibil='".$combustibil."'";
          }
          else {
            $parameters=$parameters."Combustibil='".$combustibil."'";
          }
        }

        if(!(trim($cut_viteze)=='')) //Cutie de viteze
        { if(!(trim($parameters)==''))
          {
            $parameters=$parameters." AND Cutie_viteze='".$cut_viteze."'";
          }
          else {
            $parameters=$parameters."Cutie_viteze='".$cut_viteze."'";
          }
        }
      }


        if(!(trim($parameters)==''))
        {

          $query="SELECT * FROM MASINI WHERE ".$parameters;
        }
        else {$query="SELECT * FROM MASINI"; }
        $result=mysqli_query($conn,$query);
        if($result->num_rows == 0)
        {
            ?><h1>Ne cerem scuze, produsele noastre nu corespund cautarilor dumneavoastra!</h1><?php
        }
          else { while($row=mysqli_fetch_assoc($result))
          {
        ?>
        <div class="box">
          <a href="detprodus.php?id_masina=<?php echo $row['ID']; ?>">
          <img src="../masini_listare/<?php echo $row['Imagine1'] ;?> ">
          <h3><?php echo $row['Marca']." ".$row['Model'] ?></h3>
          <p>Pret :<?php echo $row['Pret'] ?>  &euro;</p>
          </a>
          <a href="inserarecos.php?id_masina=<?php echo $row['ID']; ?>&param=<?php echo $parameters; ?>&pagina=listaremasini">
            <button type="submit" class="buton_cautare">Adauga in cos!</button>
          </a>
          <a href="#">
          <button type="submit" class="buton_cautare">Adauga la favorite!</button>
          </a>
        </div>
      <?php } } ?>

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
