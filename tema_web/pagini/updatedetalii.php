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
echo "<script type='text/javascript'>alert('$dataaa');</script>";
if(!(trim($firstname)==''))
{
  if(!(trim($lastname)==''))
  {

      if (!(trim($password) == ''))
      {
        if(!(trim($password) == ''))
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
                           $SELECT2= "SELECT email From Clienti Where Username='$username'";
                           $UPDATE = "UPDATE Clienti
                                      SET Nume='$lastname',
                                      Prenume='$firstname',
                                      Telefon='$phone',
                                      Parola='$password',
                                      Email='$email',
                                      Domiciliu='$dom',
                                      Data_nasterii='$dataaa',
                                      Sex='$gender'
                                      WHERE Username='$username' ";
                           //Prepare statement
                             $stmt = $conn->prepare($SELECT);
                             $stmt->bind_param("s", $email);
                             $stmt->execute();
                             $stmt->bind_result($email);
                             $stmt->store_result();
                             $rnum = $stmt->num_rows;
                             $result=$conn->query($SELECT2);
                             $row = $result->fetch_assoc();

                             if ($rnum==0 || $row["email"]===$email) {
                              $stmt->close();
                              $stmt = $conn->prepare($UPDATE);
                              $stmt->execute();
                              echo "New record updated sucessfully";
                             } else {
                              echo "Someone already register using this email";
                             }

                           $stmt->close();
                           $conn->close();
                          }
                        } else {
                          echo "All field are required";
                          die();
                        }
                      } else { echo "<script type='text/javascript'>alert('Numarul de telefon nu contine numai cifre sau sunt introduse mai mult de 10 cifre!');</script>"; die();}
                    } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru numarul de telefon!');</script>"; die();}
                  } else {  echo "<script type='text/javascript'>alert('Va rugam completati campul pentru e-mail!');</script>"; die();}
                } else { echo "<script type='text/javascript'>alert('Parolele nu sunt indentice!');</script>"; die();}
              }else { echo "<script type='text/javascript'>alert(' Parola are mai putin de 8 caractere!');</script>"; die();}
            } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru reintroducerea parolei!');</script>"; die();}
          } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru parola!');</script>"; die();}
      } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru nume!');</script>"; die();}
    } else { echo "<script type='text/javascript'>alert('Va rugam completati campul pentru prenume!');</script>"; die();}
header("Location:/tema_web/pagini/acasa.php");
?>
