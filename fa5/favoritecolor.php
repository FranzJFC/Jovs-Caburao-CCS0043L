<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>
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
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        table td {
            padding: 12px;
            border: 1px solid #ccc;
        }
        
        table td:first-child {
            background-color: #f9f9f9;
            font-weight: bold;
            color: #333;
            width: 40%;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background-color: #0066cc;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #0052a3;
        }
        
        .button-row td {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enter your favorite colors</h1>
        
        <form method="post" action="resultcolors.php">
            <table>
                <tr>
                    <td>Favorite color 1:</td>
                    <td><input type="text" name="color1" required></td>
                </tr>
                <tr>
                    <td>Favorite color 2:</td>
                    <td><input type="text" name="color2" required></td>
                </tr>
                <tr>
                    <td>Favorite color 3:</td>
                    <td><input type="text" name="color3" required></td>
                </tr>
                <tr>
                    <td>Favorite color 4:</td>
                    <td><input type="text" name="color4" required></td>
                </tr>
                <tr>
                    <td>Favorite color 5:</td>
                    <td><input type="text" name="color5" required></td>
                </tr>
                <tr class="button-row">
                    <td></td>
                    <td><button type="submit">send colors</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
