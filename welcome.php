<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-color:purple;
            font-family: Arial, sans-serif;
            background-color: purple;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            text-align: center;
        }
        h2 {
            color: pink;
        }
        .home-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: purple;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .home-button:hover {
            background-color: #45a049;
        }
    </style>
    <!-- Redirect to homepage after 5 seconds -->
    <meta http-equiv="refresh" content="5;url=homepage.php">
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <p>Welcome, <?php echo $_SESSION["user_name"]; ?>!</p>
        <p>Your email address is: <?php echo $_SESSION["user_email"]; ?></p>
        <!-- Home button -->
        <a href="home.php" class="home-button">Home</a>
    </div>
</body>
</html>
