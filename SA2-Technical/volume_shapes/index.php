<?php
function volumeCube($side)
{
    return $side ** 3;
}

function volumeRectangularPrism($length, $width, $height)
{
    return $length * $width * $height;
}

function volumeCylinder($radius, $height)
{
    return pi() * ($radius ** 2) * $height;
}

function volumeCone($radius, $height)
{
    return (pi() * ($radius ** 2) * $height) / 3;
}

function volumeSphere($radius)
{
    return (4 / 3) * pi() * ($radius ** 3);
}

$rows = [
    [
        'values_html' => '<strong>Cube</strong><br>s = 5',
        'formula_html' => 'V = s<sup>3</sup>',
        'answer' => volumeCube(5),
    ],
    [
        'values_html' => '<strong>Right Rectangular Prism</strong><br>l = 4, w = 3, h = 2',
        'formula_html' => 'V = lwh',
        'answer' => volumeRectangularPrism(4, 3, 2),
    ],
    [
        'values_html' => '<strong>Cylinder</strong><br>r = 3, h = 7',
        'formula_html' => 'V = &pi;r<sup>2</sup>h',
        'answer' => volumeCylinder(3, 7),
    ],
    [
        'values_html' => '<strong>Cone</strong><br>r = 4, h = 9',
        'formula_html' => 'V = (1/3)&pi;r<sup>2</sup>h',
        'answer' => volumeCone(4, 9),
    ],
    [
        'values_html' => '<strong>Sphere</strong><br>r = 5',
        'formula_html' => 'V = (4/3)&pi;r<sup>3</sup>',
        'answer' => volumeSphere(5),
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page">
        <table class="volume-table">
            <caption>Volume of Shapes</caption>
            <thead>
                <tr>
                    <th>Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td class="values-cell"><?= $row['values_html'] ?></td>
                        <td class="formula-cell"><?= $row['formula_html'] ?></td>
                        <td class="answer-cell"><?= number_format($row['answer'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
