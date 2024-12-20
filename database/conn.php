<?php
// Database configuration
$host = 'localhost';       // Database host
$dbname = 'portfolio'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set the default fetch mode to associative array for easier data handling
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // echo "Connected successfully to the database.";
} catch (PDOException $e) {
    // Catch any exceptions and display a user-friendly message
    echo "Connection failed: " . $e->getMessage();
}
?>
