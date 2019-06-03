<?php
session_start();
$username = $_POST['Username'];
$parola = $_POST['Password'];


if(!(trim($username) == ''))
{
  if (!(trim($parola) == ''))
  {
    $host = getenv('MYSQL_HOST');
    $dbUsername = getenv('MYSQL_USER');
    $dbPassword = getenv('MYSQL_PASS');
    $dbname = getenv('MYSQL_DB');
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   } else {
     $SELECT2 = "SELECT parola From clienti Where username ='$username' ";
     $result=$conn->query($SELECT2);
     print ($result);
     $row = $result->fetch_assoc();
     $rnum2 = $result->num_rows;
     if ($rnum2==1)
     {
       if($row["parola"]===$parola)
       {
         echo "<script type='text/javascript'>alert('Autentificare cu succes!');</script>";

         $_SESSION["auth"] = "true";
         $_SESSION["usr_name"] = "$username";
         header("Location: /tema_web/pagini/acasa.php");
       }
       else { echo "<script type='text/javascript'>alert('Parola introdusa gresit!');</script>";
                $mesaj="Parola introdusa gresit!";
              header("Location: /tema_web/pagini/login.php?message=$mesaj");
            }
     } else { echo "<script type='text/javascript'>alert('Numele de utilizator nu exista!');</script>";
        $mesaj="Numele de utilizator nu exista!";
        header("Location: /tema_web/pagini/login.php?message=$mesaj"); }
    }
  } else {   $mesaj="Va rugam completati campul pentru parola!";
     echo "<script type='text/javascript'>alert('Va rugam completati campul pentru parola!');</script>";
   header("Location: /tema_web/pagini/login.php?message=$mesaj");  }
}else  { $mesaj="Va rugam completati campul pentru nume de utilizator!";
  echo "<script type='text/javascript'>alert('Va rugam completati campul pentru nume de utilizator!');</script>";
header("Location: /tema_web/pagini/login.php?message=$mesaj"); }






?>
