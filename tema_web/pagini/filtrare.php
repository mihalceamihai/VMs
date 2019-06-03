<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "automosmobile";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

$marca=$_POST['listmarca'];
$pret=$_POST['listpret'];
$caroserie=$_POST['listcaroserie'];
$indice_pol=$_POST['listip'];
$stare=$_POST['liststare'];
$combustibil=$_POST['listcomb'];
$cut_viteze=$_POST['listcutvit'];

$parameters2="";

if(!(trim($marca)=='') && !($marca=='Marca')) //marca
{
  $parameters2=$parameters2."Marca='".$marca."'";
} //ma intereseaza daca a fost sau nu setat deja un parametru pt a stii daca mai pun "AND" sau nu cand voi face query-ul


if(!(trim($caroserie)=='') && !($caroserie=='Caroserie')) //CAROSERIE
{ if(!(trim($parameters2)==''))
  {
    $parameters2=$parameters2." AND Caroserie='".$caroserie."'";
  }
  else {
    $parameters2=$parameters2."Caroserie='".$caroserie."'";
  }
}

if(!(trim($indice_pol)=='') && !($indice_pol=='Indice de poluare')) //Indice poluare
{ if(!(trim($parameters2)==''))
  {
    $parameters2=$parameters2." AND Indice_poluare='".$indice_pol."'";
  }
  else {
    $parameters2=$parameters2."Indice_poluare='".$indice_pol."'";
  }
}

if(!(trim($stare)=='') && !($stare=='stare')) //STARE
{ if(!(trim($parameters2)==''))
  {
    $parameters2=$parameters2." AND Stare='".$stare."'";
  }
  else {
    $parameters2=$parameters2."Stare='".$stare."'";
  }
}

if(!(trim($combustibil)=='') && !($combustibil=='Combustibil')) //combustibil
{ if(!(trim($parameters2)==''))
  {
    $parameters2=$parameters2." AND Combustibil='".$combustibil."'";
  }
  else {
    $parameters2=$parameters2."Combustibil='".$combustibil."'";
  }
}

if(!(trim($cut_viteze)=='') && !($cut_viteze=='Cutie_viteze')) //Cutie de viteze
{ if(!(trim($parameters2)==''))
  {
    $parameters2=$parameters2." AND Cutie_viteze='".$cut_viteze."'";
  }
  else {
    $parameters2=$parameters2."Cutie_viteze='".$cut_viteze."'";
  }
}

if(!(trim($pret)=='') && !($pret=='Pret')) //Pret
{ if(!(trim($parameters2)==''))
  {
    if($pret=='cresc')
    {
      $parameters2=$parameters2." ORDER BY Pret_bucata ASC";
    }
    else {
      $parameters2=$parameters2." ORDER BY Pret_bucata DESC";
    }
  }
}

header("Location:/tema_web/pagini/listaremasini.php?para=$parameters2&pagina=2");

?>
