<?php
// process.php - Server-Side processing engine
header('Content-Type: application/json'); // Set header response format to JSON
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Retrieve and Sanitize Inputs against XSS Attacks
    $reg_number   = isset($_POST['reg_number']) ? htmlspecialchars(trim($_POST['reg_number'])) : "";
    $fullname     = isset($_POST['fullname']) ? htmlspecialchars(trim($_POST['fullname'])) : "";
    $school_class = isset($_POST['school_class']) ? htmlspecialchars(trim($_POST['school_class'])) : "";
    $gender       = isset($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : "";

    // 2. Server-Side Validation
    if (empty($reg_number) || empty($fullname) || empty($school_class) || empty($gender)) {
        echo json_encode(["status" => "error", "message" => "Server validation failed. Empty fields."]);
        exit;
    }

    try {
        // 3. Prevent SQL Injection via PDO Prepared Statements using named placeholders
        $sql = "INSERT INTO students (reg_number, fullname, school_class, gender) 
                VALUES (:reg, :name, :class, :gender)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':reg'    => $reg_number,
            ':name'   => $fullname,
            ':class'  => $school_class,
            ':gender' => $gender
        ]);

        echo json_encode(["status" => "success", "message" => "Student Registered Successfully!"]);
    } catch (\PDOException $e) {
        // Check for duplicate key entry error
        if ($e->getCode() == 23000) {
            echo json_encode(["status" => "error", "message" => "Registration Number already exists."]);
        } else {
            echo json_encode(["status" => "error", "message" => "Database error occurred."]);
        }
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>