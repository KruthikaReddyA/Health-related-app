<!DOCTYPE html>
<html>
<head>
    <title>Book a Session</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black; 
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            text-align: center;
        }
        .form-container, .receipt-container {
            background-color: #3e2723; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }
        input[type="text"], select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        fieldset {
            border: none;
            margin: 10px 0;
        }
        input[type="submit"], .print-button {
            background-color: #2196F3; /* Blue button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover, .print-button:hover {
            background-color: #0b7dda; /* Darker blue on hover */
        }
    </style>
    <script>
        function updateDoctorOptions() {
            var problemType = document.getElementById("problemType").value;
            var doctorOptions = {
                "Infectious Diseases": ["Dr. Smith", "Dr. Brown"],
                "Chronic Diseases": ["Dr. Johnson", "Dr. Clark"],
                "Mental Health Disorders": ["Dr. Williams", "Dr. Davis"],
                "Autoimmune Disorders": ["Dr. Smith", "Dr. Clark"],
                "Genetic Disorders": ["Dr. Johnson", "Dr. Davis"],
                "Nutritional Disorders": ["Dr. Williams", "Dr. Brown"],
                "Injuries": ["Dr. Clark", "Dr. Brown"],
                "Environmental Health Issues": ["Dr. Smith", "Dr. Johnson"],
                "Substance Use Disorders": ["Dr. Williams", "Dr. Davis"],
                "Reproductive Health Issues": ["Dr. Clark", "Dr. Johnson"]
            };

            var doctorContainer = document.getElementById("doctorContainer");
            doctorContainer.innerHTML = ""; // Clear previous options

            if (problemType in doctorOptions) {
                var doctors = doctorOptions[problemType];
                doctors.forEach(function(doctor) {
                    var label = document.createElement("label");
                    var radio = document.createElement("input");
                    radio.type = "radio";
                    radio.name = "doctorName";
                    radio.value = doctor;
                    radio.required = true;

                    label.appendChild(radio);
                    label.appendChild(document.createTextNode(doctor));
                    doctorContainer.appendChild(label);
                    doctorContainer.appendChild(document.createElement("br"));
                });
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <div class="receipt-container">
                <h2>Session Receipt</h2>
                <?php
                $patientName = htmlspecialchars($_POST['patientName']);
                $problemType = htmlspecialchars($_POST['problemType']);
                $sessionTime = htmlspecialchars($_POST['sessionTime']);
                $doctorName = htmlspecialchars($_POST['doctorName']);
                $paymentOptions = htmlspecialchars($_POST['paymentOptions']);

                echo "<p><strong>Patient Name:</strong> $patientName</p>";
                echo "<p><strong>Type of Problem:</strong> $problemType</p>";
                echo "<p><strong>Session Time:</strong> $sessionTime</p>";
                echo "<p><strong>Doctor Name:</strong> $doctorName</p>";
                echo "<p><strong>Payment Option:</strong> $paymentOptions</p>";
                ?>
                <button class="print-button" onclick="window.print()">Print Receipt</button>
            </div>
        <?php else : ?>
            <div class="form-container">
                <h2>Book a Session</h2>
                <form action="" method="post">
                    <fieldset>
                        <label for="patientName">Patient Name:</label>
                        <input type="text" id="patientName" name="patientName" required>
                    </fieldset>

                    <fieldset>
                        <label for="problemType">Type of Problem:</label>
                        <select id="problemType" name="problemType" onchange="updateDoctorOptions()" required>
                            <option value="">Select a problem type</option>
                            <option value="Infectious Diseases">Infectious Diseases</option>
                            <option value="Chronic Diseases">Chronic Diseases</option>
                            <option value="Mental Health Disorders">Mental Health Disorders</option>
                            <option value="Autoimmune Disorders">Autoimmune Disorders</option>
                            <option value="Genetic Disorders">Genetic Disorders</option>
                            <option value="Nutritional Disorders">Nutritional Disorders</option>
                            <option value="Injuries">Injuries</option>
                            <option value="Environmental Health Issues">Environmental Health Issues</option>
                            <option value="Substance Use Disorders">Substance Use Disorders</option>
                            <option value="Reproductive Health Issues">Reproductive Health Issues</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>Session Time:</label><br>
                        <input type="radio" id="sessionTime1" name="sessionTime" value="10:00 AM">
                        <label for="sessionTime1">10:00 AM</label><br>
                        <input type="radio" id="sessionTime2" name="sessionTime" value="11:00 AM">
                        <label for="sessionTime2">11:00 AM</label><br>
                        <input type="radio" id="sessionTime3" name="sessionTime" value="12:00 PM">
                        <label for="sessionTime3">12:00 PM</label><br>
                        <input type="radio" id="sessionTime4" name="sessionTime" value="01:00 PM">
                        <label for="sessionTime4">01:00 PM</label><br>
                        <input type="radio" id="sessionTime5" name="sessionTime" value="02:00 PM">
                        <label for="sessionTime5">02:00 PM</label><br>
                        <input type="radio" id="sessionTime6" name="sessionTime" value="03:00 PM">
                        <label for="sessionTime6">03:00 PM</label><br>
                        <input type="radio" id="sessionTime7" name="sessionTime" value="04:00 PM">
                        <label for="sessionTime7">04:00 PM</label>
                    </fieldset>

                    <fieldset>
                        <label>Doctor Name:</label>
                        <div id="doctorContainer">
                            <!-- Doctor options will be dynamically added here -->
                        </div>
                    </fieldset>

                    <fieldset>
                        <label for="paymentOptions">Payment Options:</label>
                        <select id="paymentOptions" name="paymentOptions" required>
                            <option value="">Select a payment option</option>
                            <option value="Credit Card">Credit Card <i class="fas fa-credit-card"></i></option>
                            <option value="Debit Card">Debit Card <i class="fas fa-credit-card"></i></option>
                            <option value="Cash">Cash <i class="fas fa-money-bill-wave"></i></option>
                            <option value="Insurance">Insurance <i class="fas fa-file-alt"></i></option>
                        </select>
                    </fieldset>

                    <input type="submit" value="Submit">
                </form>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
