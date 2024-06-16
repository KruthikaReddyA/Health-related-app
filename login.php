<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: pink;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
        .success {
            color: green;
            text-align: center;
            margin-top: 20px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
        session_start();
        
        // Database credentials
        $servername = "localhost"; // Adjust if needed
        $username = "root"; // Adjust if needed
        $password = ""; // Adjust if needed
        $dbname = "user_registration";
        
        // Initialize error variables
        $emailErr = $passwordErr = "";
        $email = $password = "";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
            
            // Validate password
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } else {
                $password = test_input($_POST["password"]);
            }
            
            // If no errors, check credentials
            if (empty($emailErr) && empty($passwordErr)) {
                $sql = "SELECT id, name, email, password FROM users WHERE email = '$email'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // Check if the password is correct
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['password'])) {
                        // Password is correct, start a session
                        $_SESSION["user_id"] = $row['id'];
                        $_SESSION["user_name"] = $row['name'];
                        $_SESSION["user_email"] = $row['email']; // Ensure this line sets the email
                        // Redirect to a welcome page or dashboard
                        header("Location: welcome.php");
                        exit();
                    } else {
                        $passwordErr = "Invalid password";
                    }
                } else {
                    $emailErr = "No account found with that email";
                }
            }
        }
        
        $conn->close();
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>">
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password;?>">
                <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
