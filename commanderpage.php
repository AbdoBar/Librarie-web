<!DOCTYPE html>
<html>
<head>
    <title>Commande de livres</title>
</head>
<body>
    <h1>Commande de livres</h1>
    <form action="commander.php" method="post">
        <label for="code_livre">Code du livre:</label>
        <input type="number" id="code_livre" name="code_livre" required><br>
        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" required><br>
        <input type="submit" value="Commander">
    </form>
</body>
</html>