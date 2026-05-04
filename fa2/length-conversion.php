<!DOCTYPE html>
<html>
<head>
    <title>Length Conversion - PHP Operators</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="index.php" class="back-btn">← Back</a>
        
        <h1>Length Conversion Calculator</h1>
        <p class="subtitle">Using PHP Arithmetic Operators (* and /)</p>
        
        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="value">Enter Value:</label>
                    <input type="number" id="value" name="value" step="0.0001" placeholder="Enter number" required>
                </div>
                
                <div class="form-group">
                    <label for="from_unit">From Unit:</label>
                    <select id="from_unit" name="from_unit" required>
                        <option value="">-- Select Unit --</option>
                        <optgroup label="METRIC">
                            <option value="mm">Millimeter (mm)</option>
                            <option value="cm">Centimeter (cm)</option>
                            <option value="dm">Decimeter (dm)</option>
                            <option value="m">Meter (m)</option>
                            <option value="km">Kilometer (km)</option>
                        </optgroup>
                        <optgroup label="IMPERIAL">
                            <option value="in">Inch (in)</option>
                            <option value="ft">Foot (ft)</option>
                            <option value="yd">Yard (yd)</option>
                            <option value="ch">Chain (ch)</option>
                            <option value="fur">Furlong (fur)</option>
                            <option value="mi">Mile (mi)</option>
                        </optgroup>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="to_unit">To Unit:</label>
                    <select id="to_unit" name="to_unit" required>
                        <option value="">-- Select Unit --</option>
                        <optgroup label="METRIC">
                            <option value="mm">Millimeter (mm)</option>
                            <option value="cm">Centimeter (cm)</option>
                            <option value="dm">Decimeter (dm)</option>
                            <option value="m">Meter (m)</option>
                            <option value="km">Kilometer (km)</option>
                        </optgroup>
                        <optgroup label="IMPERIAL">
                            <option value="in">Inch (in)</option>
                            <option value="ft">Foot (ft)</option>
                            <option value="yd">Yard (yd)</option>
                            <option value="ch">Chain (ch)</option>
                            <option value="fur">Furlong (fur)</option>
                            <option value="mi">Mile (mi)</option>
                        </optgroup>
                    </select>
                </div>
                
                <input type="submit" value="Convert">
            </form>
        </div>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form inputs
            $value = isset($_POST['value']) ? floatval($_POST['value']) : 0;
            $from_unit = isset($_POST['from_unit']) ? $_POST['from_unit'] : '';
            $to_unit = isset($_POST['to_unit']) ? $_POST['to_unit'] : '';
            
            // Validate input
            if ($value < 0) {
                echo '<div class="alert alert-error">Error: Please enter a positive number.</div>';
            } elseif (empty($from_unit) || empty($to_unit)) {
                echo '<div class="alert alert-error">Error: Please select both units.</div>';
            } else {
                // Define conversion factors to meters (base unit)
                $to_meter = array(
                    // Metric conversions
                    'mm' => 0.001,           // 1 mm = 0.001 m
                    'cm' => 0.01,            // 1 cm = 0.01 m
                    'dm' => 0.1,             // 1 dm = 0.1 m
                    'm'  => 1,               // 1 m = 1 m
                    'km' => 1000,            // 1 km = 1000 m
                    // Imperial conversions
                    'in' => 0.0254,          // 1 inch = 0.0254 m
                    'ft' => 0.3048,          // 1 foot = 0.3048 m
                    'yd' => 0.9144,          // 1 yard = 0.9144 m
                    'ch' => 20.1168,         // 1 chain = 20.1168 m
                    'fur' => 201.168,        // 1 furlong = 201.168 m
                    'mi' => 1609.344         // 1 mile = 1609.344 m
                );
                
                // Convert input value to meters using multiplication operator (*)
                $value_in_meters = $value * $to_meter[$from_unit];
                
                // Convert from meters to target unit using division operator (/)
                $result = $value_in_meters / $to_meter[$to_unit];
                
                // Define unit names and categories
                $unit_info = array(
                    'mm' => array('name' => 'Millimeter (mm)', 'category' => 'METRIC'),
                    'cm' => array('name' => 'Centimeter (cm)', 'category' => 'METRIC'),
                    'dm' => array('name' => 'Decimeter (dm)', 'category' => 'METRIC'),
                    'm'  => array('name' => 'Meter (m)', 'category' => 'METRIC'),
                    'km' => array('name' => 'Kilometer (km)', 'category' => 'METRIC'),
                    'in' => array('name' => 'Inch (in)', 'category' => 'IMPERIAL'),
                    'ft' => array('name' => 'Foot (ft)', 'category' => 'IMPERIAL'),
                    'yd' => array('name' => 'Yard (yd)', 'category' => 'IMPERIAL'),
                    'ch' => array('name' => 'Chain (ch)', 'category' => 'IMPERIAL'),
                    'fur' => array('name' => 'Furlong (fur)', 'category' => 'IMPERIAL'),
                    'mi' => array('name' => 'Mile (mi)', 'category' => 'IMPERIAL')
                );
                
                // Display result
                echo '<div class="result show">';
                echo '<h2>Conversion Result</h2>';
                
                echo '<div class="result-item">';
                echo '<span class="result-label">Input:</span> ';
                echo '<span class="result-value">' . number_format($value, 4) . ' ' . $unit_info[$from_unit]['name'] . '</span>';
                echo '</div>';
                
                echo '<div class="result-item">';
                echo '<span class="result-label">Output:</span> ';
                echo '<span class="result-value">' . number_format($result, 4) . ' ' . $unit_info[$to_unit]['name'] . '</span>';
                echo '</div>';
                
                echo '<div class="formula-box">';
                echo '<strong>Formula Used (PHP Operators):</strong><br>';
                // Formula explanation
                if ($from_unit === $to_unit) {
                    echo 'Same unit: Result = Input<br>';
                    echo htmlspecialchars("Result = $value * (" . $to_meter[$from_unit] . ") / (" . $to_meter[$to_unit] . ")");
                } else {
                    echo htmlspecialchars("Step 1 (Multiplication *): $value * " . $to_meter[$from_unit] . " = $value_in_meters meters");
                    echo '<br>';
                    echo htmlspecialchars("Step 2 (Division /): $value_in_meters / " . $to_meter[$to_unit] . " = $result");
                }
                echo '</div>';
                
                echo '</div>';
            }
        }
        ?>
        
        <h2>Conversion Formulas Reference</h2>
        
        <h3 style="color: #667eea; margin-top: 20px;">Metric Conversions</h3>
        <table class="conversion-table">
            <tr>
                <th>From</th>
                <th>Formula</th>
                <th>To</th>
            </tr>
            <tr>
                <td>1 centimetre</td>
                <td>× 10</td>
                <td>10 millimetres</td>
            </tr>
            <tr>
                <td>1 decimetre</td>
                <td>× 10</td>
                <td>10 centimetres</td>
            </tr>
            <tr>
                <td>1 metre</td>
                <td>× 100</td>
                <td>100 centimetres</td>
            </tr>
            <tr>
                <td>1 kilometre</td>
                <td>× 1000</td>
                <td>1000 metres</td>
            </tr>
        </table>
        
        <h3 style="color: #667eea; margin-top: 20px;">Imperial Conversions</h3>
        <table class="conversion-table">
            <tr>
                <th>From</th>
                <th>Formula</th>
                <th>To</th>
            </tr>
            <tr>
                <td>1 foot</td>
                <td>× 12</td>
                <td>12 inches</td>
            </tr>
            <tr>
                <td>1 yard</td>
                <td>× 3</td>
                <td>3 feet</td>
            </tr>
            <tr>
                <td>1 chain</td>
                <td>× 22</td>
                <td>22 yards</td>
            </tr>
            <tr>
                <td>1 furlong</td>
                <td>× 10</td>
                <td>10 chains</td>
            </tr>
            <tr>
                <td>1 mile</td>
                <td>× 8</td>
                <td>8 furlongs</td>
            </tr>
        </table>
        
        <h3 style="color: #667eea; margin-top: 20px;">Metric ↔ Imperial Conversions</h3>
        <table class="conversion-table">
            <tr>
                <th>From</th>
                <th>Formula</th>
                <th>To</th>
            </tr>
            <tr>
                <td>1 millimetre</td>
                <td>÷ 25.4</td>
                <td>0.03937 inches</td>
            </tr>
            <tr>
                <td>1 centimetre</td>
                <td>÷ 2.54</td>
                <td>0.39370 inches</td>
            </tr>
            <tr>
                <td>1 metre</td>
                <td>× 39.3701</td>
                <td>39.37008 inches</td>
            </tr>
            <tr>
                <td>1 kilometre</td>
                <td>× 1093.6133</td>
                <td>1093.6133 yards</td>
            </tr>
            <tr>
                <td>1 inch</td>
                <td>× 2.54</td>
                <td>2.54 centimetres</td>
            </tr>
            <tr>
                <td>1 foot</td>
                <td>× 30.48</td>
                <td>30.48 centimetres</td>
            </tr>
            <tr>
                <td>1 mile</td>
                <td>× 1.609344</td>
                <td>1.609344 kilometres</td>
            </tr>
        </table>
        
        <h2>Example Conversions</h2>
        <div class="info-box">
            <div class="result-item">
                <strong>Example 1:</strong> Convert 1 meter to centimeters<br>
                Formula: 1 × 1 (meter to m) ÷ 0.01 (cm to m) = <strong>100 cm</strong>
            </div>
            <div class="result-item" style="margin-top: 15px;">
                <strong>Example 2:</strong> Convert 5 feet to meters<br>
                Formula: 5 × 0.3048 (ft to m) = <strong>1.524 m</strong>
            </div>
            <div class="result-item" style="margin-top: 15px;">
                <strong>Example 3:</strong> Convert 10 kilometers to miles<br>
                Formula: 10 × 1000 (km to m) ÷ 1609.344 (mi to m) = <strong>6.2137 mi</strong>
            </div>
        </div>
        
        <h2>PHP Operators Used</h2>
        <div class="info-box">
            <p><strong>Multiplication Operator (*):</strong> Used to convert input unit to base unit (meters)</p>
            <p style="margin-top: 10px;"><strong>Division Operator (/):</strong> Used to convert from base unit (meters) to target unit</p>
            <p style="margin-top: 10px;"><strong>Formula:</strong> result = (value × conversion_factor_from) / conversion_factor_to</p>
        </div>
    </div>
</body>
</html>
