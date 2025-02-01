<?php
// Database credentials
$server = "localhost"; // Use "localhost" (without port) for MySQL connection
$username = "root"; // Change if using a different MySQL user
$password = ""; // Change if your MySQL user has a password
$database = "db"; // Change to your actual database name
$port = 3306; // Default MySQL port

// Establish database connection
$db = new mysqli($server, $username, $password, $database, $port);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (!empty($fullname) && !empty($email)) {
        $fullname = $db->real_escape_string($fullname);
        $email = $db->real_escape_string($email);

        $sql = "INSERT INTO users (fullname, email) VALUES ('$fullname', '$email')";
        if ($db->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    } else {
        echo "Please fill all fields.";
    }
}

$db->close();
?>
