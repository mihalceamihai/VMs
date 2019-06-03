<?php
session_start();
if(isset($_SESSION["auth"]) )
{
  $idcomanda=$_GET['id_comanda'];
  $username=$_SESSION['usr_name'];
  echo $idcomanda;

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "automosmobile";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error()) {
   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 }else {
   $DELETE="DELETE FROM comanda WHERE ID_COMANDA='$idcomanda'";
   $stmt = $conn->prepare($DELETE);
   $stmt->execute();
   $mesaj="Produs sters cu succes!";
   echo $mesaj;
 }


 $stmt->close();
 $conn->close();
}
header("Location:/tema_web/pagini/cos.php");
?>
