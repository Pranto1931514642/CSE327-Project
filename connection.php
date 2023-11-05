<?php
try {
    // Attempt to establish a database connection using PDO (PHP Data Objects)
    $db = new PDO('mysql:host=localhost;dbname=blood_donation', 'username', 'password');
    
    // Set PDO attribute to handle errors, enabling exception mode for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Catch any PDO exceptions that occur during connection attempt
    echo "Connection failed: " . $e->getMessage(); // Output error message if connection fails
    die(); // Terminate script execution to prevent further code execution after connection failure
}
?>
