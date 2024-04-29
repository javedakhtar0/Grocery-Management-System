<?php
include 'connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $email = $_POST["email"];
    $password = $_POST["password"];


    //check if the provided email and password match any record in the users table
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    $num_rows = 0;

    // If a record is found, login is successful
    if ($result->$num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Email and password not found. Please register first.";
    }
}
