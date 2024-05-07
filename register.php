<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here you would typically perform validation and database insertion
    // For simplicity, let's just print the received data
    echo "Registered successfully with username: $username";
}
?>
