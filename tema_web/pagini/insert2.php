<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Untitled document</title>
  </head>
  <body>
    <?php

      $nume=$_GET["nume"];
      $prenume=$_GET["pren"];
      $numar_telefon=$_GET["nrtel"];
      $email=$_GET["ema"];

      mysql_connect("localhost","root","");
      mysql_select_db("automosmobile");
      mysql_query("insert into clienti(Nume,Prenume,Nr_telefon,Email) values('$nume','$prenume','$numar_telefon','$email')");
    ?>
  </body>
</html>
