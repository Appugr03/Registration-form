<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Apoorvagr03@";
$dbname = "user_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    
    // Prepared statement for secure insertion
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone, age) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $email, $phone, $age);
    
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
