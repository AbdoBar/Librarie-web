<?php
require 'db_connect.php';

if (!$conn) {
    die('Database connection error: ' . mysqli_connect_error());
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["code"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $date = $_POST["date"];
    $price = $_POST["price"];

    $sql = "INSERT INTO LIVRE (code_livre, titre, auteur, genre, date_publication, prix) VALUES ('$code', '$title', '$author', '$genre', '$date', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>