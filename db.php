<?php
// db.php - Database abstraction layer using PDO
$dsn = "mysql:host=127.0.0.1;port=3307;dbname=mzumbe_sims;charset=utf8mb4";
$user = "root";
$pass = "";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false, // Disabling emulation for real prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Database connection failed safely."); // Secure error message preventing credential leaks
}
?>