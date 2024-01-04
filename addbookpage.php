<!DOCTYPE html>
<html>
<head>
    <title>Library Management System - Add Book</title>
</head>
<body>
    <h1>Add a New Book</h1>
    <form action="addbook.php" method="post">
        <label for="code">Book Code:</label>
        <input type="text" id="code" name="code" required>
        <br>
        <label for="title">Book Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>
        <br>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>
        <br>
        <label for="date">Date of Publication:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required>
        <br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>