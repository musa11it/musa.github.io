<?php
// Admin credentials (hardcoded for this example)
$adminUsername = "admin";
$adminPin = "4321"; // Simple PIN for demonstration

// Fetch form data
$username = $_POST['username'];
$pin = $_POST['pin'];

// Validate credentials
if ($username === $adminUsername && $pin === $adminPin) {
    // Credentials are correct, redirect to admin page
    header("Location: admin.php");
} else {
    // Invalid credentials, redirect back to main page with an error
    echo "<script>alert('Invalid username or PIN'); window.location.href='index.html';</script>";
}
?>
