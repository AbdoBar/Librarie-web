<?php

require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $_POST['book'];

    $sql = "SELECT * FROM LIVRE WHERE titre='$book'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>Code Livre</th><th>Titre</th><th>Auteur</th><th>Genre</th><th>Date de Publication</th><th>Prix</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["code_livre"] . "</td><td>" . $row["titre"] . "</td><td>" . $row["auteur"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["date_publication"] . "</td><td>" . $row["prix"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

$conn->close();
?>