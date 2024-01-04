<?php

require 'db_connect.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $code_client = htmlspecialchars($_POST["code_client"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $rue = htmlspecialchars($_POST["rue"]);
    $ville = htmlspecialchars($_POST["ville"]);
    $code_postal = htmlspecialchars($_POST["code_postal"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $addresse_mail = htmlspecialchars($_POST["addresse_mail"]);
    $mot_de_passe = htmlspecialchars($_POST["mot_de_passe"]);
    $statut ="v";

    $sql ="INSERT INTO CLIENT (code_client, nom, rue, ville, code_postal, telephone, addresse_mail, mot_de_passe, statut) VALUES ('$code_client', '$nom', '$rue', '$ville', '$code_postal', '$telephone', '$addresse_mail', '$mot_de_passe', '$statut')";
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
    } else {
        echo "Une erreur s'est produite!";
    }
    /*$stmt = $conn->prepare("INSERT INTO CLIENT (code_client, nom, rue, ville, code_postal, telephone, addresse_mail, mot_de_passe, statut) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param($code_client, $nom, $rue, $ville, $code_postal, $telephone, $addresse_mail, $mot_de_passe, $statut);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "Inscription réussie!";
    }else{
        echo "Une erreur s'est produite!";
    }*/
}
?>