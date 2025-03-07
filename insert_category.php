<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];
    $number_items = $_POST['number_items'];
    $status = $_POST['status'];

    try {
        // Prepare an SQL statement to insert the category into the database
        $sql = "INSERT INTO `categories table` (`Category Name`, `Description`, `Number & Items`, `Status`) 
                VALUES (:category_name, :description, :number_items, :status)";
        
        // Prepare statement

        
        // Redirect to another page (optional)
        echo "Category added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
