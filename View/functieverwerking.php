<?php
$woning_adres = $_POST['woninginput'];
$woning_prijs = $_POST['woningprijs'];

var_dump($_POST);

$servername = "localhost";
$username = "username";
$password = "password";

try {
    $sql = "INSERT INTO huis () VALUES ('', '$woning_adres', '$woning_prijs')";

    $conn->exec($sql);
    echo "Er is een nieuwe woning toegevoegd";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>