<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <form action="signup.php" method="post">
        <label for="code_client">Code Client:</label>
        <input type="text" id="code_client" name="code_client" required>
        <br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="rue">Rue:</label>
        <input type="text" id="rue" name="rue" required>
        <br>
        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required>
        <br>
        <label for="code_postal">Code Postal:</label>
        <input type="text" id="code_postal" name="code_postal" required>
        <br>
        <label for="telephone">Téléphone:</label>
        <input type="text" id="telephone" name="telephone" required>
        <br>
        <label for="addresse_mail">Adresse Mail:</label>
        <input type="text" id="addresse_mail" name="addresse_mail" required>
        <br>
        <label for="mot_de_passe">Mot de Passe:</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>