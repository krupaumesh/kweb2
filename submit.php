

<?php
// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'job_applications';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$skills = $_POST['skills'];

// Insert data into database
$sql = 'INSERT INTO applications (name, email, phone, qualification, experience, skills) VALUES (?, ?, ?, ?, ?, ?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssss', $name, $email, $phone, $qualification, $experience, $skills);

if ($stmt->execute()) {
    echo 'Application submitted successfully!';
} else {
    echo 'Error submitting application: ' . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();

// Redirect
header('Location: thank-you.html');
exit;
?>