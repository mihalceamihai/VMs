<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="jquery-3.3.1.min.js"></script>
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
            if(isset($_SESSION["auth"]) )
            {
              $username=$_SESSION['usr_name'];
              echo "<li><a href='acasa.php'>Acasa</a></li>";
              echo "<li><a href='contact.php'>Contact</a></li>";
              echo "<li><a href='#'>Contul meu</a> ";
              echo "<ul>";
              echo "<li><a href='logout.php'>Log out!</a></li>";
              echo "<li><a href='detaliicont.php'>Editare</a></li>";
              echo "<li><a href='cos.php'>Cos</a></li>";
              echo "</ul>";
              echo "</li>";
            }
          ?>
            </ul>
        </nav>

        <div id="logo">
          <img src="../logo/logoorange.png" alt="logo">
        <div>

    </header>

    <section id="newsletter">
      <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
         <input type="email"  placeholder="Enter Email...">
          <button type="submit" class="button_1">Subscribe</button>
        </form>
      </div>
    </section>


    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Istoric</h1>

          <h1 >Produsele user-ului: <?php echo $username; ?></h1>
          <ol id="services">
            <li>
              <?php
              $host = "localhost";
              $dbUsername = "root";
              $dbPassword = "";
              $dbname = "automosmobile";
              $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
              $query="SELECT * FROM comanda where Stare_comanda='efectuata'";
              $result2=mysqli_query($conn,$query);
              if($result2->num_rows == 0)
              {
                  ?><h1>Nu sunt comenzi de afisat!</h1><?php
              }
                else { while($row=mysqli_fetch_assoc($result2))
                {
                  ?>
              <h3>Nume produs: <?php echo $row['Nume_produs'] ?> </h3>
              <img src="../masini_listare/<?php echo $row['Imagine'] ?>" class="imagsliding" >
              <p>Pret: <?php echo $row['Pret_bucata'] ?> &euro;</p>
              <p>Cantitate:<?php echo $row['Numar_bucati'] ?></p>
              <p>Pret total:<?php echo $row['Pret_total'] ?></p>
            <?php }} ?>
            </li>
          </ol>
        </article>

      </div>
    </section>





  <footer>
        <p>AutoMosMobile, Copyright &copy; 2018</p>
  </footer>



  </body>
</html>
