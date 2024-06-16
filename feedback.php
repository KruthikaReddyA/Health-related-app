<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Mental Health App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FF9900; /* Dark orange background color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 1rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 1rem;
        }

        input, textarea, select {
            margin-top: 0.5rem;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 12px); /* Adjust based on your styling */
        }

        button {
            margin-top: 1.5rem;
            padding: 0.5rem;
            background-color: #FFC107; /* Orange submit button color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #FF9900; /* Darker orange hover color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback</h1>
        <?php if (isset($feedback_message)) { echo "<p>$feedback_message</p>"; } ?>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">Excellent</option>
                <option value="4">Very Good</option>
                <option value="3">Good</option>
                <option value="2">Fair</option>
                <option value="1">Poor</option>
            </select>
            
            <label for="experience">Experience:</label>
            <textarea id="experience" name="experience" rows="4" required></textarea>
            
            <label for="how_they_feel">How They Feel:</label>
            <textarea id="how_they_feel" name="how_they_feel" rows="4" required></textarea>
            
            <label for="num_visits">Number of Visits:</label>
            <select id="num_visits" name="num_visits" required>
                <option value="1">1 time</option>
                <option value="2">2 times</option>
                <option value="3">3 times</option>
                <option value="4">4 times</option>
                <option value="5">5 or more times</option>
            </select>
            
            <label for="message">Additional Comments:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
