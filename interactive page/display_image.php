<?php
// Database connection
$host = 'localhost'; // Or 127.0.0.1
$user = 'root';      // Update with your database username
$pass = '';          // Default XAMPP password is empty
$db = 'images';      // Database name
$port = 3308;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest image from the database
$sql = "SELECT image, image_type FROM images_table ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['image'];
    $imageType = $row['image_type'];

    // Send appropriate headers and display the image
    header("Content-type: $imageType");
    echo $imageData;
} else {
    echo "No image found in the database.";
}

$conn->close();
?>
