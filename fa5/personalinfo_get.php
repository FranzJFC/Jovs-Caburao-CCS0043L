<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information - GET Method</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
            padding: 20px;
            color: #2c3e50;
        }
        
        .page-wrapper {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-top: 20px;
        }
        
        .header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        
        .header p {
            font-size: 14px;
            color: #7f8c8d;
            font-weight: 500;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            padding: 40px;
            transition: box-shadow 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group:last-of-type {
            margin-bottom: 32px;
        }
        
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #34495e;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px 14px;
            font-size: 15px;
            border: 1px solid #e0e6ed;
            border-radius: 6px;
            transition: all 0.2s ease;
            font-family: inherit;
            background: #fafbfc;
        }
        
        input[type="text"]:hover {
            border-color: #bdc3c7;
            background: white;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
            background: white;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.08);
        }
        
        button {
            width: 100%;
            padding: 14px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            letter-spacing: 0.3px;
        }
        
        button:hover {
            background: #2980b9;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        .success-section {
            margin-top: 40px;
            animation: slideIn 0.4s ease;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .result-card {
            background: linear-gradient(135deg, #ecf0f1 0%, #f8f9fa 100%);
            border: 1px solid #e0e6ed;
            border-radius: 8px;
            padding: 24px;
        }
        
        .result-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-weight: 600;
            color: #27ae60;
            font-size: 15px;
        }
        
        .result-header::before {
            content: "✓";
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background: #27ae60;
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            font-size: 14px;
            font-weight: bold;
        }
        
        .result-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .result-item {
            background: white;
            padding: 16px;
            border-radius: 6px;
            border-left: 3px solid #3498db;
        }
        
        .result-item:nth-child(3) {
            border-left-color: #e74c3c;
        }
        
        .result-item:nth-child(5) {
            border-left-color: #f39c12;
        }
        
        .result-label {
            font-size: 12px;
            color: #95a5a6;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 6px;
            letter-spacing: 0.3px;
        }
        
        .result-value {
            font-size: 16px;
            color: #2c3e50;
            font-weight: 500;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <div class="header">
            <h1>Personal Profile</h1>
            <p>Get Method Form Processing</p>
        </div>
        
        <div class="card">
            <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="infoForm">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="John" required>
                </div>

                <div class="form-group">
                    <label for="mname">Middle Name</label>
                    <input type="text" id="mname" name="mname" placeholder="Michael" required>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Doe" required>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" id="dob" name="dob" placeholder="May 1 1985" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Enter your address" required>
                </div>

                <button type="submit">Submit Information</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['fname'])) {
                echo "<div class='success-section'>";
                echo "<div class='result-card'>";
                echo "<div class='result-header'>Information Received</div>";
                echo "<div class='result-grid'>";
                echo "<div class='result-item'><div class='result-label'>First Name</div><div class='result-value'>" . htmlspecialchars($_GET['fname']) . "</div></div>";
                echo "<div class='result-item'><div class='result-label'>Middle Name</div><div class='result-value'>" . htmlspecialchars($_GET['mname']) . "</div></div>";
                echo "<div class='result-item'><div class='result-label'>Last Name</div><div class='result-value'>" . htmlspecialchars($_GET['lname']) . "</div></div>";
                echo "<div class='result-item'><div class='result-label'>Date of Birth</div><div class='result-value'>" . htmlspecialchars($_GET['dob']) . "</div></div>";
                echo "<div class='result-item' style='grid-column: 1 / -1;'><div class='result-label'>Address</div><div class='result-value'>" . htmlspecialchars($_GET['address']) . "</div></div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    
    <script>
        document.getElementById('infoForm').addEventListener('submit', function() {
            const btn = this.querySelector('button');
            btn.style.opacity = '0.8';
        });
    </script>
</body>
</html>
