<?php




//require 'db_connect.php';


  $email = $_POST['addresse_mail'];

  $password = $_POST['mot_de_passe'];


// Perform database operations (e.g., validate credentials)
// Connect to the database (replace 'hostname', 'username', 'password', and 'database' with your database details)
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'librarie');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//$conn =new mysqli_connect('localhost', 'root','', 'login_system');

// Check if the connection was successful
if (!$conn) {
  die('Database connection error: ' . mysqli_connect_error());
}

// Create a SQL query to check if the entered credentials are valid
$query = "SELECT * FROM CLIENT WHERE  	addresse_mail='$email' AND  mot_de_passe='$password'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
  // Authentication successful
  // Start a session and store relevant user data if needed
  session_start();
  $_SESSION['user_name'] = $user['allname'];
  $_SESSION['state'] = $user['state'];
   echo $user['nom'];
  // Redirect the user to a dashboard or another page
  //header("Location: pageuser.php");
  //exit();
  echo "        WELCOM................";
} else {
  // Authentication failed
  echo "Invalid username or password.";
}

// Close the database connection
mysqli_close($conn);
?>
