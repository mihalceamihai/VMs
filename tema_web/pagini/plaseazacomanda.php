<?php
session_start();
if(isset($_SESSION["auth"]) )
{

  $username=$_SESSION['usr_name'];


  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "automosmobile";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error()) {
   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 }else {
   $SELECT="SELECT * FROM comanda WHERE Username='$username' AND Stare_comanda='neefectuata'";
   $result=mysqli_query($conn,$SELECT);
   $pret=0;
   if($result->num_rows == 0)
   {
       ?><h1>Nu aveti nici un produs in cos!</h1><?php
   }
     else { while($row=mysqli_fetch_assoc($result))
     {
       $pret=$pret + $row['Pret_bucata'];
     }
    echo "<br/> Pret total: ";
    echo $pret;
    $SELECT2="SELECT Bani FROM Clienti WHERE Username='$username'";
    $result2=mysqli_query($conn,$SELECT2);
    $row2=mysqli_fetch_assoc($result2);
    $baniuser=$row2['Bani'];
    echo $baniuser;
    echo "<br/>";
    echo $pret;
    $baniramasi=$baniuser - $pret;
    echo "<br/> bani ramasi";
    echo $baniramasi;
    if($baniuser - $pret >= 0)
    {
      echo "Merge";
      $UPDATE = "UPDATE Clienti
                 SET Bani='$baniramasi'
                 WHERE Username='$username' ";
      $stmt = $conn->prepare($UPDATE);
      $stmt->execute();
      $SELECT3="SELECT * FROM comanda WHERE Username='$username' AND Stare_comanda='neefectuata'";
      $result3=mysqli_query($conn,$SELECT3);
      while($row3=mysqli_fetch_assoc($result3))
      {

        $cantcumparata=$row3['Numar_bucati'];
        $idmasinacomanda=$row3['ID_MASINA'];
        $UPDATE2 = "UPDATE Masini
                   SET Cantitate='masini.Cantitate - $cantcumparata'
                   WHERE ID='$idmasinacomanda' ";
        $stmt->close();
        $stmt = $conn->prepare($UPDATE2);
        $stmt->execute();
        $idcomanda=$row3['ID_COMANDA'];
        echo "<br/> id comanada";
        echo $idcomanda;
        $UPDATE3 = "UPDATE Comanda
                   SET Comanda.Stare_comanda='efectuata'
                   WHERE ID_COMANDA='$idcomanda' ";
                   $stmt->close();
                   $stmt = $conn->prepare($UPDATE3);
                   $stmt->execute();
      }
      //update cantitate la masini
      //update comanda efectuata
    }else
   {
   $mesaj="Comanda nu poate fi plasata!";
   echo $mesaj;
 }
 }



}
}
?>
