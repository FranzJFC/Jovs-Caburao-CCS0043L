<?php

$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 20px auto;
        }

        .box {
            background-color: white;
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Records</h2>

    <?php if ($result->num_rows > 0): ?>

        <?php $count = 1; ?>

        <?php while ($row = $result->fetch_assoc()): ?>

            <div class="box">
                <strong>Dog <?php echo $count++; ?></strong><br>

                Name: <?php echo $row['name']; ?><br>
                Breed: <?php echo $row['breed']; ?><br>
                Age: <?php echo $row['age']; ?><br>
                Address: <?php echo $row['address']; ?><br>
                Color: <?php echo $row['color']; ?><br>
                Height: <?php echo $row['height']; ?><br>
                Weight: <?php echo $row['weight']; ?><br>
            </div>

        <?php endwhile; ?>

    <?php else: ?>

        <p>No records found.</p>

    <?php endif; ?>

</div>

<?php $conn->close(); ?>

</body>
</html>