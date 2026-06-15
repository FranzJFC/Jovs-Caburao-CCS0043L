<?php
// Set cookies when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['fname'])) {
    setcookie("firstname", $_POST['fname'], time() + (86400 * 30), "/");
    setcookie("middlename", $_POST['mname'], time() + (86400 * 30), "/");
    setcookie("lastname", $_POST['lname'], time() + (86400 * 30), "/");
    setcookie("submit_time", time(), time() + (86400 * 30), "/");
    
    // Reload page to ensure cookies are set
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$submitted = isset($_COOKIE['submit_time']);
$elapsed = $submitted ? (time() - $_COOKIE['submit_time']) : 0;
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
        
        .info-box button {
            background-color: #666;
            padding: 8px 16px;
            font-size: 14px;
            width: auto;
        }
        
        .info-box button:hover {
            background-color: #555;
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

        <div class="info-box" id="infoBox" <?php echo !$submitted ? 'style="display: none;"' : ''; ?>>
            <h3>Cookie Display Timeline</h3>
            <p style="text-align: center; color: #666; margin-bottom: 20px;">Click the refresh button to check cookies at different times</p>
            
            <?php
            if ($submitted) {
                if ($elapsed < 10) {
                    echo "<p style='text-align: center; color: #666;'><strong>Elapsed time: " . $elapsed . " seconds</strong><br>Refresh again at 10+ seconds to see cookies.</p>";
                } else {
                    // Show 10 seconds (visible from 10+ seconds)
                    if ($elapsed >= 10) {
                        echo "<div class='cookie-display'>";
                        echo "<span class='timer'>After 10 seconds:</span>";
                        echo "<div class='cookie-label'>First Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Middle Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Last Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : '(empty)') . "</div>";
                        echo "</div>";
                    }
                    
                    // Show 20 seconds (visible from 20+ seconds)
                    if ($elapsed >= 20) {
                        echo "<div class='cookie-display'>";
                        echo "<span class='timer'>After 20 seconds:</span>";
                        echo "<div class='cookie-label'>First Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Middle Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Last Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : '(empty)') . "</div>";
                        echo "</div>";
                    }
                    
                    // Show 30 seconds (visible from 30+ seconds, disappears at 35+ seconds)
                    if ($elapsed >= 30 && $elapsed < 35) {
                        echo "<div class='cookie-display'>";
                        echo "<span class='timer'>After 30 seconds:</span>";
                        echo "<div class='cookie-label'>First Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Middle Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : '(empty)') . "</div>";
                        echo "<div class='cookie-label'>Last Name:</div>";
                        echo "<div class='cookie-value'>" . (isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : '(empty)') . "</div>";
                        echo "</div>";
                    }
                    
                    if ($elapsed >= 35) {
                        echo "<p style='text-align: center; color: #999; margin-top: 10px; font-size: 12px;'><em>30 seconds display has been removed</em></p>";
                    }
                }
            }
            ?>
            
            <div style="text-align: center; margin-top: 20px;">
                <button type="button" onclick="location.reload();" style="background-color: #666; color: white; cursor: pointer; width: auto; padding: 8px 16px; font-size: 14px; border: none; border-radius: 4px;">Refresh Page</button>
            </div>
        </div>
    </div>
</body>
</html>
