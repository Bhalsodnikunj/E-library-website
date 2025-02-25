<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // You can process and insert data into a database here
    // Example: Insert user into the database (you'll need to connect to your database first)
    
    $servername = "localhost";
    $username = "root";
    $password = "2002";
    $dbname = "dbnew785"; // Replace with your actual database name



    

    // SQL to insert user
    
    $sql = "SELECT `id`, `name`, `email`, `role` FROM `add_new_user` WHERE 1";

    {
        echo "New user added successfully.";
   

    // Close connection
    

}
}
?>
