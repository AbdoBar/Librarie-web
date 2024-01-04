<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form  method="POST" action="login.php">
        <h2>Login</h2>
        <label for="addresse_mail">Email:</label>
        <input type="text" id="addresse_mail" name="addresse_mail" required>

        <label for="mot_de_passe">Password:</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
