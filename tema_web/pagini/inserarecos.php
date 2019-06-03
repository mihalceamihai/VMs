<?php
session_start();
if(isset($_SESSION["auth"]) )
{
  $idmasina=$_GET['id_masina'];
  $parametrii=$_GET['param'];
  $parametriiinit=$parametrii;
  $pag=$_GET['pagina'];
  echo $parametrii;
  echo "<br/> Pagina:";
  echo $pag;
    echo "<br/>";
  $client=$_SESSION['usr_name'];
  echo $idmasina;
  echo $client;
  echo $parametrii;

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "automosmobile";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if (mysqli_connect_error()) {
   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
  $SELECT = "SELECT ID_COMANDA,Numar_bucati From comanda Where Username='$client' AND ID_MASINA = ? Limit 1";
  $INSERT = "INSERT Into comanda(ID_CLIENT,Username,ID_PRODUS,ID_MASINA,Nume_produs,Stare_comanda,Pret_bucata,Numar_bucati,Pret_total,Imagine) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $SELECT2= "SELECT ID From Clienti Where Username='$client'";
  $SELECT3="SELECT Marca, Model , Pret , Cantitate , Imagine1 From masini where ID='$idmasina'";


  //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $idmasina);
    $stmt->execute();
    $stmt->bind_result($idcomanda,$nrbuc);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    $stmt->fetch();
    echo "<br/> comanda:";
    echo $idcomanda;
    echo "<br/> numar bucati1:";
    echo $nrbuc;
    if ($rnum==0 )
    {
        $nrbuc=1;
    }

    echo "<br/> numar bucati2:";
    echo  $nrbuc;
    $result=$conn->query($SELECT2);
    $row = $result->fetch_assoc();
    echo "<br/>";
    $idclient=$row['ID'];
    $idprodus="1";

    $result3=$conn->query($SELECT3);
    $row3 = $result3->fetch_assoc();
    $nume_produs=$row3['Marca']." ".$row3['Model'];
    $starecomanda="neefectuata";
    $pret_bucata=$row3['Pret'];
    $numar_bucati=$nrbuc;
    $pret_total=$pret_bucata * $numar_bucati;
    $im1=$row3['Imagine1'];
    $cantramasa=$row3['Cantitate'];
    echo "Cantitate ramasa:"; echo $cantramasa;
    echo "<br/>";
    echo $idclient;
    echo "<br/>";
    echo $client;
    echo "<br/>";
    echo $idprodus;
    echo "<br/>";
    echo $idmasina;
    echo "<br/>";
    echo $nume_produs;
    echo "<br/>";
    echo $starecomanda;
    echo "<br/>";
    echo $pret_bucata;
    echo "<br/>";
    echo $numar_bucati;
    echo "<br/>";
    echo $pret_total;
    echo "<br/>";
    $numar_bucatiad=$numar_bucati +1;
    echo $numar_bucatiad;
    echo "<br/>";
    $pret_totalad= $pret_bucata * $numar_bucatiad;
    echo $pret_totalad;
    echo "<br/>";
    echo $im1;
     $UPDATE = "UPDATE comanda
                 SET Numar_bucati='$numar_bucatiad',
                 Pret_total ='$pret_totalad'
                WHERE Username='$client' AND ID_MASINA='$idmasina' ";
   if ($rnum==0 ) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("isiissiiis",$idclient,$client,$idprodus,$idmasina,$nume_produs,$starecomanda,$pret_bucata,$numar_bucati,$pret_total,$im1);
      $stmt->execute();
      echo "<script type='text/javascript'>alert('Produs adaugat cu succes!');</script>";
      $mesaj="Produs adaugat cu succes!";
      }
      else if ($rnum==1 && $numar_bucatiad <= $cantramasa)
      {
     $stmt->close();
     $stmt = $conn->prepare($UPDATE);
     $stmt->execute();
     echo "<script type='text/javascript'>alert('Produs updatat cu succes!');</script>";
     $mesaj="Produs updatat cu succes!";
      }  else { echo "<script type='text/javascript'>alert('Stoc epuizat!');</script>";
    $mesaj="Stoc epuizat!"; }
 $stmt->close();
 $conn->close();
}

}
else { echo "<script type='text/javascript'>alert('Va rugam sa va logati!');</script>";
    $mesaj="Va rugam sa va logati!";
}

if($pag==='detprodus')
{
   header("Location: /tema_web/pagini/detprodus.php?id_masina=$idmasina&message=$mesaj");
}
if($pag==='listaremasini')
{
  header("Location: /tema_web/pagini/listaremasini.php?pagina=4&param=$parametriiinit&mes=$mesaj");
  echo $mesaj;
}
//header("Location:/tema_web/pagini/listaremasini.php?param=$parametrii&mesagge=$mesaj&pagina=4");
?>
