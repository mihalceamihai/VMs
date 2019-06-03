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



  <section id="main">
    <div class="container">
      <article id="main-col">
        <h1 class="page-title">Contact</h1>
        <ul id="contactleft">
          <li>
            <button class="button_1" type="submit">Adauga produse</button>
          </li>
          <li>
            <button class="button_1" type="submit">Editeaza produse</button>
          </li>
          <li>
            <button class="button_1" type="submit">Afisare clienti</button>
          </li>
          <li>
            <button class="button_1" type="submit">Afisare comenzi</button>
          </li>


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
