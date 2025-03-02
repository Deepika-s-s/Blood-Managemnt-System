<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: user.php"); // Redirect to dashboard or another page
    } else {
        echo '<script>alert("Login Failed, Invalid Password or Username");</script>';
        echo '<script>window.location.href="userlog.html";</script>';
    }

}

$conn->close();
?>
