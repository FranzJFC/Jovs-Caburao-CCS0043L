<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 30px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
        }

        table {
            border-collapse: collapse;
            border: 3px solid #333;
        }

        td {
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
            border: 2px solid #333;
            font-weight: bold;
            font-size: 14px;
        }

        .yellow {
            background-color: yellow;
            color: black;
        }

        .red {
            background-color: red;
            color: white;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            td {
                width: 30px;
                height: 30px;
                font-size: 12px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Multiplication Table</h1>
        <table>
            <?php
                // Generate multiplication table from 0 to 10
                for ($i = 0; $i <= 10; $i++) {
                    echo "<tr>";
                    
                    for ($j = 0; $j <= 10; $j++) {
                        // Calculate the product
                        $product = $i * $j;
                        
                        // Determine color alternation based on row number
                        // Even rows (0, 2, 4, ...) get alternating yellow/red
                        // Odd rows (1, 3, 5, ...) get alternating red/yellow
                        if ($i % 2 == 0) {
                            // Even row
                            $cellColor = ($j % 2 == 0) ? "yellow" : "red";
                        } else {
                            // Odd row
                            $cellColor = ($j % 2 == 0) ? "red" : "yellow";
                        }
                        
                        // Output the cell with the appropriate color class
                        echo "<td class='" . $cellColor . "'>" . $product . "</td>";
                    }
                    
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
