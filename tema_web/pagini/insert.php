<?php
$lastname = $_POST['nume'];
$firstname = $_POST['prenume'];
$username = $_POST['numeutilizator'];
$password = $_POST['parola'];
$gender = $_POST['gen'];
$email = $_POST['email'];
$dom = $_POST['adresadomiciliu'];
$phone = $_POST['nrtelefon'];
$repass=$_POST['re_parola'];
$day=$_POST['zi'];
$month=$_POST['luna'];
$year=$_POST['an'];
$dateOfBirth=$_POST['zi']."-". $_POST['luna']."-".$_POST['an'];
$d=date_create($dateOfBirth);
$dataaa=date_format($d,"Y/m/d H:i:s");

if(!(trim($firstname)==''))
{
  if(!(trim($lastname)==''))
  {
    if(!(trim($username) == ''))
    {
      if (!(trim($password) == ''))
      {
        if(!(trim($repass) == ''))
        {
          if(strlen($password) >= 8)
          {
            if($password === $repass)
            {
              if(!(trim($email) ==''))
              {
                if(!(trim($phone)==''))
                {
                  if(preg_match("/^[0-9]{10}$/",$phone))
                  {
                    if( isset($gender) && !(trim($dataaa)=='') && !(trim($dom)==''))
                      {
                          $host = "localhost";
                          $dbUsername = "root";
                          $dbPassword = "";
                          $dbname = "automosmobile";
                          //create connection
                          $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                          if (mysqli_connect_error()) {
                           die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
                          } else {
                           $SELECT = "SELECT email From Clienti Where email = ? Limit 1";
                           $SELECT2 = "SELECT Username From Clienti Where Username = ? Limit 1";
                           $INSERT = "INSERT Into Clienti (Nume,Prenume,Username,Telefon,Parola,Email,Domiciliu,Data_nasterii,Sex) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
                           //Prepare statement
                           $stmt = $conn->prepare($SELECT2);
                           $stmt->bind_param("s", $username);
                           $stmt->execute();
                           $stmt->bind_result($username);
                           $stmt->store_result();
                           $rnum2 = $stmt->num_rows;
                           if ($rnum2==0)
                           {
                             $stmt = $conn->prepare($SELECT);
                             $stmt->bind_param("s", $email);
                             $stmt->execute();
                             $stmt->bind_result($email);
                             $stmt->store_result();
                             $rnum = $stmt->num_rows;
                             if ($rnum==0) {
                              $stmt->close();
                              $stmt = $conn->prepare($INSERT);
                              $stmt->bind_param("sssssssss", $lastname, $firstname, $username,$phone,$password ,$email ,$dom,$dataaa,$gender);
                              $stmt->execute();
                              echo "<script type='text/javascript'>alert('New record inserted sucessfully');</script>";
                             } else {
                              echo "<script type='text/javascript'>alert('Someone already register using this email');</script>";
                             }
                           }
                          else { echo "<script type='text/javascript'>alert('Username deja folosit!');</script>";
                           $stmt->close();
                           $conn->close();
                          }
                        }
                      } else {
                          echo "<script type='text/javascript'>alert('All field are required');</script>";
                          die();
                        }
                  } else { echo "<script type='text/javascript'>alert('Numarul de telefon nu contine numai cifre sau sunt introduse mai mult de 10 cifre!');</script>"; die();}
                } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru numarul de telefon!');</script>"; die();}
              } else {  echo "<script type='text/javascript'>alert('Va rugam completati campul pentru e-mail!');</script>"; die();}
            } else { echo "<script type='text/javascript'>alert('Parolele nu sunt indentice!');</script>"; die();}
          }else { echo "<script type='text/javascript'>alert(' Parola are mai putin de 8 caractere!');</script>"; die();}
        } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru reintroducerea parolei!');</script>"; die();}
      } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru parola!');</script>"; die();}
    }else  { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru nume de utilizator!');</script>"; die();}
  } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru nume!');</script>"; die();}
} else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru prenume!');</script>"; die();}
header("Location:/tema_web/pagini/login.php");
?>
