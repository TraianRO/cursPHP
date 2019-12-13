<?php

require_once('connect.php');

echo "<pre>";

print_r($_POST);

$prenume = $_POST["prenume"];
$nume    = $_POST["nume"];
$email   = $_POST["email"];
$parola  = sha1($_POST["parola"]);
$status  = $_POST["status"];

$sql = "INSERT INTO utilizatori (prenume, nume, email, parola, status) 
        VALUES ('".$prenume."', '".$nume."', '".$email."', '".$parola."', '".$status."')";

if(mysqli_query($con, $sql)){
    echo "Date introduse cu succes!";
    $db_eroare = false;
} else {
    echo "Eroare la " . $sql . "<br>". "mysqli_error($con)";
}

?>