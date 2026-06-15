<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information - GET Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
            font-size: 14px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #0066cc;
            background-color: #f9f9f9;
        }
        
        button {
            width: 100%;
            padding: 10px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: #0052a3;
        }
        
        .result {
            margin-top: 40px;
            background-color: #e8f5e9;
            padding: 20px;
            border: 1px solid #4caf50;
            border-radius: 4px;
        }
        
        .result h3 {
            color: #2e7d32;
            margin-top: 0;
        }
        
        .result-item {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #333;
        }
        
        .result-label {
            font-weight: bold;
            color: #1b5e20;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Personal Information</h1>
        <p class="subtitle">GET Method Form</p>
        
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
            </div>

            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" id="mname" name="mname" required>
            </div>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['fname'])) {
            echo "<div class='result'>";
            echo "<h3>Submitted Information:</h3>";
            echo "<div class='result-item'><span class='result-label'>First Name:</span> " . htmlspecialchars($_GET['fname']) . "</div>";
            echo "<div class='result-item'><span class='result-label'>Middle Name:</span> " . htmlspecialchars($_GET['mname']) . "</div>";
            echo "<div class='result-item'><span class='result-label'>Last Name:</span> " . htmlspecialchars($_GET['lname']) . "</div>";
            echo "<div class='result-item'><span class='result-label'>Date of Birth:</span> " . htmlspecialchars($_GET['dob']) . "</div>";
            echo "<div class='result-item'><span class='result-label'>Address:</span> " . htmlspecialchars($_GET['address']) . "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
