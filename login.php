<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here you would typically check credentials against database records
    // For simplicity, let's just print the received data
    echo "Logged in successfully with username: $username";
}
?>
