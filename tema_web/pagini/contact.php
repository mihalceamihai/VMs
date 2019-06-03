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
      				echo "<li><a href='login.php?message=Introduceti credentialele!'>Login</a> ";
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
            <h3>AutoMosMobile</h3>
            <p>Echipa AutoMosMobile va sta la dispozitie in orice moment! Contactati-ne si va vom raspunde in cel mai timp scurt posibil.</p>
            <p>Va multumim!</p>
          </li>
          <li>
            <h3>AutoMosMobile</h3>
            <p>Email: contact@automosmobile.ro</p>
            <p>Telefon: 0728396595</p>
          </li>

        </ul>
      </article>

      <aside id="sidebar">
        <div class="dark">
          <h3>Pune o intrebare!</h3>
          <form class="quote">
            <div>
              <label>Nume</label><br>
              <input type="text" placeholder="Nume">
            </div>
            <div>
              <label>E-mail</label><br>
              <input type="email" placeholder="|adresa de e-mail">
            </div>
            <div>
              <label>Message</label><br>
              <textarea placeholder="Mesajul dumneavoastra"></textarea>
            </div>
            <button class="button_1" type="submit">Trimite mesaj</button>
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

  </body>
</html>
