<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Page with Image from Database</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            flex-direction: column;
        }
        #image-container {
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        #image-container:hover {
            transform: scale(1.05); /* Slight zoom effect when hovering */
        }
        img {
            width: 80%; /* Reduce size to 50% width */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        #login-form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #login-form input {
            margin: 5px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        #login-form button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #login-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div id="image-container">
    <!-- Redirect users to the subscription page with the confirmation -->
    <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank">
        <img src="display_image.php" alt="Clickable Image from Database" />
    </a>
</div>

<!-- Login form to access admin page -->
<div id="login-form">
    <form action="admin_login.php" method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="pin" placeholder="Enter PIN" required>
        <button type="submit">Login as Admin</button>
    </form>
</div>

</body>
</html>
