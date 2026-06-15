<?php
// Set cookies when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fname'])) {
    setcookie("firstname", $_POST['fname'], time() + (86400 * 30), "/");
    setcookie("middlename", $_POST['mname'], time() + (86400 * 30), "/");
    setcookie("lastname", $_POST['lname'], time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information - Cookies</title>
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
            border-color: #ff9800;
            background-color: #f9f9f9;
        }
        
        button {
            width: 100%;
            padding: 10px;
            background-color: #ff9800;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        
        button:hover {
            background-color: #e68900;
        }
        
        .info-box {
            margin-top: 40px;
            background-color: #fff3e0;
            padding: 20px;
            border: 1px solid #ffb74d;
            border-radius: 4px;
            display: none;
        }
        
        .info-box h3 {
            color: #e65100;
            margin-top: 0;
            margin-bottom: 15px;
        }
        
        .cookie-display {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border: 1px solid #ffe0b2;
            border-radius: 3px;
            display: none;
        }
        
        .cookie-label {
            font-weight: bold;
            color: #d84315;
            font-size: 13px;
        }
        
        .cookie-value {
            color: #333;
            margin-top: 5px;
        }
        
        .timer {
            font-size: 12px;
            color: #ff9800;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Personal Information</h1>
        <p class="subtitle">Cookie Demo - setcookie() Function</p>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

            <button type="submit">Set Cookies</button>
        </form>

        <div class="info-box" id="infoBox">
            <h3>Cookie Display Timeline</h3>
            <div id="timer10" class="cookie-display">
                <span class="timer">After 10 seconds:</span>
                <div class="cookie-label">First Name:</div>
                <div class="cookie-value" id="fname10"></div>
                <div class="cookie-label">Middle Name:</div>
                <div class="cookie-value" id="mname10"></div>
                <div class="cookie-label">Last Name:</div>
                <div class="cookie-value" id="lname10"></div>
            </div>

            <div id="timer20" class="cookie-display">
                <span class="timer">After 20 seconds:</span>
                <div class="cookie-label">First Name:</div>
                <div class="cookie-value" id="fname20"></div>
                <div class="cookie-label">Middle Name:</div>
                <div class="cookie-value" id="mname20"></div>
                <div class="cookie-label">Last Name:</div>
                <div class="cookie-value" id="lname20"></div>
            </div>

            <div id="timer30" class="cookie-display">
                <span class="timer">After 30 seconds:</span>
                <div class="cookie-label">First Name:</div>
                <div class="cookie-value" id="fname30"></div>
                <div class="cookie-label">Middle Name:</div>
                <div class="cookie-value" id="mname30"></div>
                <div class="cookie-label">Last Name:</div>
                <div class="cookie-value" id="lname30"></div>
            </div>
        </div>
    </div>

    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i].trim();
                if (c.indexOf(nameEQ) == 0) {
                    return c.substring(nameEQ.length, c.length);
                }
            }
            return "";
        }

        function displayCookies() {
            var infoBox = document.getElementById('infoBox');
            
            // Check if cookies are set
            if (getCookie("firstname") != "") {
                infoBox.style.display = "block";
            }
        }

        // Display cookies after 10 seconds
        setTimeout(function() {
            var timer10 = document.getElementById('timer10');
            timer10.style.display = "block";
            document.getElementById('fname10').textContent = getCookie("firstname");
            document.getElementById('mname10').textContent = getCookie("middlename");
            document.getElementById('lname10').textContent = getCookie("lastname");
        }, 10000);

        // Display cookies after 20 seconds
        setTimeout(function() {
            var timer20 = document.getElementById('timer20');
            timer20.style.display = "block";
            document.getElementById('fname20').textContent = getCookie("firstname");
            document.getElementById('mname20').textContent = getCookie("middlename");
            document.getElementById('lname20').textContent = getCookie("lastname");
        }, 20000);

        // Display cookies after 30 seconds
        setTimeout(function() {
            var timer30 = document.getElementById('timer30');
            timer30.style.display = "block";
            document.getElementById('fname30').textContent = getCookie("firstname");
            document.getElementById('mname30').textContent = getCookie("middlename");
            document.getElementById('lname30').textContent = getCookie("lastname");
            
            // Delete cookies after displaying them at 30 seconds
            document.cookie = "firstname=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "middlename=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            document.cookie = "lastname=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            
            // Hide only the 30 seconds display after 5 more seconds (at 35 seconds total)
            setTimeout(function() {
                timer30.style.display = "none";
            }, 5000);
        }, 30000);

        // Check on page load
        window.addEventListener('load', displayCookies);
    </script>
</body>
</html>
