<?php
// Database connection
$host = 'localhost';
$dbname = 'dbnew785';
$username = 'root';
$password = '2002';

require_once 'db_connect.php';
// Connect to the database

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $emailaddress = $_POST['emailaddress'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
        
        // Prepare the SQL statement to insert data
        $sql = "INSERT INTO `redbnew785` (fullname, username, emailaddress, password) VALUES (:
        $fullname, $username, :emailaddress, :password)";
        
        
        // Execute the statement and check if the user is added
       {
            // Redirect to the home page (index.php) after successful registration
            header("Location: login.html");
            exit();
        } {
            echo "Error: Could not register the user.";
        }
    }

    // Close connection

?>