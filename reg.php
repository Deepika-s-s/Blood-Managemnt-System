<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $blood_type = $_POST["blood_type"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, username, blood_type, password) VALUES ('$name', '$username', '$blood_type', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Successfully Register");</script>';
        echo '<script>window.location.href="reg.html";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
