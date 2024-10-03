<?php
// Database connection with error handling
$host = 'localhost'; 
$user = 'root';     
$pass = '';         
$db = 'images';   
$port = 3308;  

// Try to establish a connection
try {
    $conn = new mysqli($host, $user, $pass, $db, $port);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Check if an image was submitted
if (isset($_FILES['image'])) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image)); // Image content
    $imageType = $_FILES['image']['type'];

    // Delete the old image if exists
    $deleteOldImage = "DELETE FROM images_table";
    if ($conn->query($deleteOldImage) === TRUE) {
        // Insert the new image into the database
        $sql = "INSERT INTO images_table (image, image_type) VALUES ('$imgContent', '$imageType')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Image uploaded successfully and replaced the old one.'); window.location.href='admin.php';</script>";
        } else {
            echo "Error inserting new image: " . $conn->error;
        }
    } else {
        echo "Error deleting old image: " . $conn->error;
    }
}
$conn->close();
?>
