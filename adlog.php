<?php
// Establish a connection to the database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'blood_bank';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input
$username = $_POST['username'];
$password = $_POST['password'];

// Validate user input (you should use more secure methods in a real application)
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query the database
$query = "SELECT * FROM  admin_table WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Successful login
    $_SESSION["username"] = $username;
    header("Location: admin.php");
    // You can redirect to the admin dashboard or perform other actions here
} else {
    // Invalid login
    echo '<script>alert("Login Failed, Invalid Password or Username");</script>';
    echo '<script>window.location.href="adlog.html";</script>';
}

// Close the database connection
$conn->close();
?>
