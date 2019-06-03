<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automosmobile";

// Create connection
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$numar_telefon=$_POST['nrtelefon'];
$email=$_POST['email'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clienti (Nume,Prenume,Nr_telefon,Email )
VALUES ('$nume','$prenume','$numar_telefon','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
