<?php

// Include database and authentication configuration files
require_once '../config/db.php';
require_once '../config/auth.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>