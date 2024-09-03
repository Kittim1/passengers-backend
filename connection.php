<?php
// db.php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'passengers_db';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Log the error instead of displaying it
    error_log('Database connection failed: ' . $e->getMessage());
    // Optionally, you could throw an exception or handle it as needed
    die(json_encode(['error' => 'Database connection failed']));
}
?>
