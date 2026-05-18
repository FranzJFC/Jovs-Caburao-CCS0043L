<?php
function calculate_operations($param1, $param2, $param3) {
    $sum = $param1 + $param2 + $param3;
    $difference = $param1 - $param2 - $param3;
    $product = $param1 * $param2 * $param3;

    if ($param2 == 0 || $param3 == 0) {
        $quotient = null;
    } else {
        $quotient = $param1 / $param2 / $param3;
    }

    return array(
        "sum" => $sum,
        "difference" => $difference,
        "product" => $product,
        "quotient" => $quotient
    );
}

$param1 = 25;
$param2 = 13;
$param3 = 6;

$results = calculate_operations($param1, $param2, $param3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Defined Function</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="page">
        <h1>User Defined Function</h1>
        <table>
            <tr>
                <th colspan="2">My Parameter values: <?php echo htmlspecialchars($param1 . ", " . $param2 . ", " . $param3, ENT_QUOTES, "UTF-8"); ?></th>
            </tr>
            <tr>
                <td>Addition</td>
                <td><?php echo htmlspecialchars((string)$results["sum"], ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td><?php echo htmlspecialchars((string)$results["difference"], ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td><?php echo htmlspecialchars((string)$results["product"], ENT_QUOTES, "UTF-8"); ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td>
                    <?php
                    if ($results["quotient"] === null) {
                        echo "Undefined (division by zero)";
                    } else {
                        echo htmlspecialchars((string)$results["quotient"], ENT_QUOTES, "UTF-8");
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
