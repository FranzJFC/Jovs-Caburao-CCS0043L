<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$sum = array_sum($numbers);

$difference = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
}

$product = 1;
foreach ($numbers as $number) {
    $product *= $number;
}

$quotient = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] == 0) {
        $quotient = null;
        break;
    }
    $quotient /= $numbers[$i];
}

$numbers_list = implode(", ", $numbers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array Operations</title>
    <link rel="stylesheet" href="array-operations.css" />
</head>
<body>
    <div class="page">
        <h1>Array Operations</h1>
        <table>
            <tr>
                <th colspan="2">Array list: <?php echo htmlspecialchars($numbers_list, ENT_QUOTES, "UTF-8"); ?></th>
            </tr>
            <tr>
                <td>Addition</td>
                <td><?php echo htmlspecialchars((string)$sum, ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td><?php echo htmlspecialchars((string)$difference, ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td><?php echo htmlspecialchars((string)$product, ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td>
                    <?php
                    if ($quotient === null) {
                        echo "Undefined (division by zero)";
                    } else {
                        echo htmlspecialchars((string)$quotient, ENT_QUOTES, "UTF-8");
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
