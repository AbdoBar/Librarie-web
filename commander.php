<?php
require 'db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$code_livre = $_POST["code_livre"];
$quantite = $_POST["quantite"];
$code_client="12";
$date = date('Y-m-d H:i:s');
$statut="v";

$sql = "INSERT INTO COMMANDE (numero, code_client, code_livre, date, quantite, statut) VALUES (NULL, '$code_client', '$code_livre', '$date', '$quantite', '$statut')";

if ($conn->query($sql) === TRUE) {
    echo "Commande réussie!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>