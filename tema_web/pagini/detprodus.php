<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>AutoMosMobile | Contact</title>
  <link rel="stylesheet" href="../css/css2tema.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <header>
        <nav>
          <ul>
            <?php
            session_start();
            $idmasina=$_GET['id_masina'];

            if(isset($_SESSION["auth"]) )
            {

              echo "<li><a href='acasa.php'>Acasa</a></li>";
              echo "<li class='current'><a href='contact.php'>Contact</a></li>";
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



<div class="containersliding">
  <?php
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "automosmobile";
  $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

    $query="SELECT * FROM MASINI WHERE ID='$idmasina'";
    $result=mysqli_query($conn,$query);

    $row=mysqli_fetch_assoc($result);

  ?>
  <h1 class="page-title"><?php $marmod=$row['Marca']." ".$row['Model'];
  echo $row['Marca']." ".$row['Model']." ".$row['An_fabricatie']." ".$row['Km_parcursi']." ".$row['Combustibil']." ".$row['Caroserie'] ?></h1>

      <div class="mySlides">
        <div class="numbertextsliding">1 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine1']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">2 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine2']; ?>" class="imagsliding" >
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">3 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine3']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">4 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine4']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">5 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine5']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">6 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine6']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">7 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine7']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">8 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine8']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">9 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine9']; ?>" class="imagsliding">
      </div>

      <div class="mySlides">
        <div class="numbertextsliding">10 / 10</div>
          <img src="../masini_listare/<?php echo $row['Imagine10']; ?>" class="imagsliding">
      </div>

      <a class="prevsliding" onclick="plusSlides(-1)">❮</a>
      <a class="nextsliding" onclick="plusSlides(1)">❯</a>

      <div class="caption-containersliding">
        <p id="caption"></p>
      </div>

      <div class="rowsliding">
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine1']; ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine2']; ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine3']; ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine4']; ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine5']; ?>" style="width:100%" onclick="currentSlide(5)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine6']; ?>" style="width:100%" onclick="currentSlide(6)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine7']; ?>" style="width:100%" onclick="currentSlide(7)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine8']; ?>" style="width:100%" onclick="currentSlide(8)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine9']; ?>" style="width:100%" onclick="currentSlide(9)" alt="<?php echo $marmod;?>">
        </div>
        <div class="columnsliding">
          <img class="demosliding cursorsliding " src="../masini_listare/<?php echo $row['Imagine10']; ?>" style="width:100%" onclick="currentSlide(10)" alt="<?php echo $marmod;?>">
        </div>
      </div>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demosliding");
      var captionText = document.getElementById("caption");

      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>


    <section id="main">
      <div class="containersliding">
        <article id="main-col">

          <ul id="services">
            <li>

              <p>Marca: <?php echo $row['Marca']; ?></p>
              <p>Model: <?php echo $row['Model']; ?></p>
              <p>Caroserie: <?php echo $row['Caroserie']; ?></p>
              <p>An fabricatie: <?php echo $row['An_fabricatie']; ?></p>
              <p>Km parcursi: <?php echo $row['Km_parcursi']; ?></p>
              <p>Indice poluare: <?php echo $row['Indice_poluare']; ?></p>
              <p>Pret: <?php echo $row['Pret']; ?></p>
              <p>Combustibil: <?php echo $row['Combustibil']; ?></p>
              <p>Putere: <?php echo $row['Putere']; ?></p>
              <p>Capacitate cilindrica: <?php echo $row['Capacitate_cilindrica']; ?></p>
              <p>Stare: <?php echo $row['Stare']; ?></p>
            </li>

            <a href="inserarecos.php?id_masina=<?php echo $row['ID']; ?>&param=pagina4&pagina=detprodus">
              <button type="submit" class="buton_cautare">Adauga in cos!</button>
            </a>
            <button type="submit" class="buton_cautare">Adauga la favorite!</button>
          </ul>

        </article>
      </div>
    </section>

  <section id="newsletter">
    <div class="container">
      <h1>Subscribe To Our Newsletter</h1>
      <form>
       <input type="email"  placeholder="Enter Email...">
        <button type="submit" class="button_1">Subscribe</button>
      </form>
    </div>
  </section>

  <footer>
    <p>AutoMosMobile, Copyright &copy; 2018</p>
  </footer>

  </body>
</html>
