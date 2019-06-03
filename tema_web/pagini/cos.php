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
              $username=$_SESSION["usr_name"];
              echo "<script type='text/javascript'>alert($username);</script>";
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

        <div id="logo">
          <img src="../logo/logoorange.png" alt="logo">
        <div>

    </header>


    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Cos de cumparaturi</h1>
          <ol id="services">



                <?php
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbname = "automosmobile";
                $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

                $query="SELECT * FROM comanda where Username='$username' AND Stare_comanda='neefectuata'";
                $pretfinalcomanda=0;
                $result=mysqli_query($conn,$query);
                if($result->num_rows == 0)
                {
                    ?><h1>Nu aveti nici un produs in cos!</h1><?php
                }
                  else { while($row=mysqli_fetch_assoc($result))
                  {

                ?>
              <li>
              <h3><?php echo $row['Nume_produs'] ?></h3>
              <img src="../masini_listare/<?php echo $row['Imagine'] ?>" class="imagsliding" >
              <p>Pret: <?php echo $row['Pret_bucata'] ?> &euro;</p>
              <a href="stergeprodus.php?id_comanda=<?php echo $row['ID_COMANDA']; ?>"><button class="button_1" type="submit">Sterge Produs</button></a>

              <label>Cantitate:</label>
                <input id="minus" type="button" class="minus" value="-">
                <input id="theInput" type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $row['Numar_bucati'] ?>" min="0" step="1">
                <input id="plus" type="button" class="plus" value="+">
              </li>
            <?php }} ?>

          </ol>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>Lista cumparaturi</h3>
            <form class="quote" method="post" action="plaseazacomanda.php">
                <div>
                  <?php
                  $query2="SELECT * FROM comanda where Username='$username'";
                  $result2=mysqli_query($conn,$query);
                  if($result2->num_rows == 0)
                  {
                      ?><h1>Nu aveti nici un produs in cos!</h1><?php
                  }
                    else { while($row=mysqli_fetch_assoc($result2))
                    {

                  ?>
                <label>Numeprodus:<?php echo $row['Nume_produs'] ?></label><br>
                <label>Cantitate:<?php echo $row['Numar_bucati'] ?> </label><br>
                <label>Pret:<?php echo $row['Pret_total'] ?> </label><br>
                        <?php
                        $pretfinalcomanda=$pretfinalcomanda + $row['Pret_total'];
                  echo "<br/>";   }}  ?>
                <hr>
                <label>Total:<?php echo $pretfinalcomanda ?>  </label><br>
                </div>


            <button class="button_1" type="submit">Plaseaza comanda</button>
          </form>
          </div>
        </aside>
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

  <script>
  var input = document.getElementById('theInput');
  document.getElementById('plus').onclick = function(){
      input.value = parseInt(input.value, 10) +1
  }
  document.getElementById('minus').onclick = function(){
      if(parseInt(input.value,10) > 0)
      {input.value = parseInt(input.value, 10) -1;}
  }
  </script>

  </body>
</html>
