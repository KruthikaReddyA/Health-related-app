<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
            color: ;
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
        <h2>Registration Form</h2>
        <?php
        // Database credentials
        $servername = "localhost"; // Adjust if needed
        $username = "root"; // Adjust if needed
        $password = ""; // Adjust if needed
        $dbname = "user_registration";

        // Initialize error variables
        $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
        $name = $email = $password = $confirmPassword = "";
        $successMessage = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

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

            // Validate confirm password
            if (empty($_POST["confirm_password"])) {
                $confirmPasswordErr = "Confirm Password is required";
            } else {
                $confirmPassword = test_input($_POST["confirm_password"]);
                if ($password !== $confirmPassword) {
                    $confirmPasswordErr = "Passwords do not match";
                }
            }

            // If no errors, insert data into the database
            if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

                if ($conn->query($sql) === TRUE) {
                    // Redirect to login page after successful registration
                    header("Location: login.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
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
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name;?>">
                <span class="error"><?php echo $nameErr;?></span>
            </div>
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
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $confirmPassword;?>">
                <span class="error"><?php echo $confirmPasswordErr;?></span>
            </div>
            <button type="submit">Register</button>
        </form>
        <?php
        if (!empty($successMessage)) {
            echo "<p class='success'>$successMessage</p>";
        }
        ?>
    </div>
</body>
</html>
