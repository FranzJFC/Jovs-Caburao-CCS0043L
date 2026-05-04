<!DOCTYPE html>
<html>
<head>
    <title>Two-Digit Combinations - PHP Loops</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <h1>Two-Digit Combinations</h1>
        <p class="subtitle">Generate all two-digit decimal combinations using PHP loops</p>
        
        <div class="form-container">
            <h2>Combinations (00-99)</h2>
            <p>Using nested for loops to generate all decimal combinations from 00 to 99:</p>
        </div>
        
        <?php
        // Using nested for loops to generate combinations
        $combinations = array();
        
        // Outer loop: tens place (0-9)
        for ($tens = 0; $tens < 10; $tens++) {
            // Inner loop: units place (0-9)
            for ($units = 0; $units < 10; $units++) {
                // Combine tens and units with str_pad to ensure 2 digits
                $combination = str_pad(($tens * 10 + $units), 2, '0', STR_PAD_LEFT);
                $combinations[] = $combination;
            }
        }
        
        // Display combinations in comma-delimited format
        echo '<div class="result show">';
        echo '<h2>Output</h2>';
        echo '<div class="output-box">';
        echo implode(', ', $combinations) . ', ';
        echo '</div>';
        echo '</div>';
        
        // Display loop explanation
        echo '<div class="info-box">';
        echo '<h2>How It Works</h2>';
        echo '<p><strong>Outer Loop:</strong> Iterates through tens place (0-9)</p>';
        echo '<p style="margin-top: 12px;"><strong>Inner Loop:</strong> Iterates through units place (0-9) for each tens value</p>';
        echo '<p style="margin-top: 12px;"><strong>Total Combinations:</strong> ' . count($combinations) . ' (10 × 10)</p>';
        echo '<p style="margin-top: 12px;"><strong>Formatting:</strong> str_pad() ensures each number has leading zeros (00-09, 10-19, etc.)</p>';
        echo '</div>';
        ?>
    </div>

    <style>
        .output-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            word-wrap: break-word;
            font-family: monospace;
            font-size: 14px;
            line-height: 1.6;
            color: #0f172a;
        }
    </style>
</body>
</html>
