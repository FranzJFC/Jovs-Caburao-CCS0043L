<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["color1"] = $_POST["color1"];
    $_SESSION["color2"] = $_POST["color2"];
    $_SESSION["color3"] = $_POST["color3"];
    $_SESSION["color4"] = $_POST["color4"];
    $_SESSION["color5"] = $_POST["color5"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>
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
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .color-list {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
        }
        
        .color-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #0066cc;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .color-box {
            width: 60px;
            height: 60px;
            border: 2px solid #ccc;
            border-radius: 4px;
            flex-shrink: 0;
        }
        
        .color-text {
            flex: 1;
        }
        
        .button-group {
            margin-top: 40px;
            display: flex;
            gap: 10px;
        }
        
        button {
            flex: 1;
            padding: 12px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #0052a3;
        }
        
        .back-btn {
            background-color: #666;
        }
        
        .back-btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Favorite Color</h1>
        
        <div class="color-list">
            <?php
            if (isset($_SESSION["color1"])) {
                echo "<div class='color-item'><div class='color-box' style='background-color: " . htmlspecialchars($_SESSION["color1"]) . ";'></div><div class='color-text'>My Favorite Color 1: " . htmlspecialchars($_SESSION["color1"]) . "</div></div>";
                echo "<div class='color-item'><div class='color-box' style='background-color: " . htmlspecialchars($_SESSION["color2"]) . ";'></div><div class='color-text'>My Favorite Color 2: " . htmlspecialchars($_SESSION["color2"]) . "</div></div>";
                echo "<div class='color-item'><div class='color-box' style='background-color: " . htmlspecialchars($_SESSION["color3"]) . ";'></div><div class='color-text'>My Favorite Color 3: " . htmlspecialchars($_SESSION["color3"]) . "</div></div>";
                echo "<div class='color-item'><div class='color-box' style='background-color: " . htmlspecialchars($_SESSION["color4"]) . ";'></div><div class='color-text'>My Favorite Color 4: " . htmlspecialchars($_SESSION["color4"]) . "</div></div>";
                echo "<div class='color-item'><div class='color-box' style='background-color: " . htmlspecialchars($_SESSION["color5"]) . ";'></div><div class='color-text'>My Favorite Color 5: " . htmlspecialchars($_SESSION["color5"]) . "</div></div>";
            } else {
                echo "<p>No colors set yet. Please submit colors from the previous page.</p>";
            }
            ?>
        </div>
        
        <div class="button-group">
            <button class="back-btn" onclick="window.location.href='favoritecolor.php'">Back</button>
        </div>
    </div>
</body>
</html>
