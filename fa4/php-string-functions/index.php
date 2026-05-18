<?php
$names = array(
    "Chrisa",
    "Mark Anthony",
    "Liza Marie",
    "John Paulo",
    "Angela Cruz",
    "Aaron Lee",
    "Bianca Santos",
    "Carlos Dizon",
    "Diana Reyes",
    "Ethan Flores",
    "Fiona Castro",
    "Gabriel Lim",
    "Hannah Torres",
    "Isabel Ramos",
    "Jasper King",
    "Kara Lopez",
    "Lorenzo Tan",
    "Mia Valdez",
    "Nathan Go",
    "Olivia Chan"
);

$names_list = implode(", ", $names);
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP String Functions</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="page">
        <h1>PHP String Functions</h1>
        <table>
            <tr>
                <th class="list-title" colspan="6">List of names: <?php echo htmlspecialchars($names_list, ENT_QUOTES, "UTF-8"); ?></th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Number of characters</th>
                <th>Uppercase first character</th>
                <th>Replace vowels with @</th>
                <th>Check position of character "a"</th>
                <th>Reverse name</th>
            </tr>
            <?php foreach ($names as $name) { ?>
                <?php
                $length = strlen($name);
                $upper_first = ucfirst($name);
                $replaced = str_replace($vowels, "@", $name);
                $position = strpos(strtolower($name), "a");
                $position_text = ($position === false) ? "Not found" : (string)$position;
                $reversed = strrev($name);
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
                    <td><?php echo htmlspecialchars((string)$length, ENT_QUOTES, "UTF-8"); ?></td>
                    <td><?php echo htmlspecialchars($upper_first, ENT_QUOTES, "UTF-8"); ?></td>
                    <td><?php echo htmlspecialchars($replaced, ENT_QUOTES, "UTF-8"); ?></td>
                    <td><?php echo htmlspecialchars($position_text, ENT_QUOTES, "UTF-8"); ?></td>
                    <td><?php echo htmlspecialchars($reversed, ENT_QUOTES, "UTF-8"); ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
