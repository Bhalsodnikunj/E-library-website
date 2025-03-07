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
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
        
        // Prepare the SQL statement to insert data
        $sql = "INSERT INTO `lodbnew785`(`id`, `username`, `password`) VALUES ([value-1],[value-2],[value-3])";
        
        // Execute the statement and check if the user is added
       {
            // Redirect to the home page (index.php) after successful registration
            header("Location: index2.html");
            exit();
        } {
            echo "Error: Could not register the user.";
        }
    }
    // Close connection
?>