<?php
$people = array(
    array("name" => "Aira Mendoza", "image" => "images/airamendoza.jpg", "age" => 19, "birthday" => "Apr 12, 2005", "contact" => "09123456789"),
    array("name" => "Benedict Cruz", "image" => "images/benedict.jpg", "age" => 20, "birthday" => "Jan 03, 2004", "contact" => "09234567890"),
    array("name" => "Carla Reyes", "image" => "images/carla.jpg", "age" => 21, "birthday" => "Nov 21, 2003", "contact" => "09345678901"),
    array("name" => "Daniel Soriano", "image" => "images/daniel.jpg", "age" => 20, "birthday" => "Jul 18, 2004", "contact" => "09456789012"),
    array("name" => "Elise Navarro", "image" => "images/elise.jpg", "age" => 19, "birthday" => "May 30, 2005", "contact" => "09567890123"),
    array("name" => "Francis Dela Cruz", "image" => "images/francis.jpg", "age" => 22, "birthday" => "Sep 14, 2002", "contact" => "09678901234"),
    array("name" => "Grace Villanueva", "image" => "images/grace.jpg", "age" => 21, "birthday" => "Dec 09, 2003", "contact" => "09789012345"),
    array("name" => "Hannah Cruz", "image" => "images/hannah.jpg", "age" => 20, "birthday" => "Feb 26, 2004", "contact" => "09890123456"),
    array("name" => "Miles Morales", "image" => "images/miles.jpg", "age" => 23, "birthday" => "Oct 05, 2001", "contact" => "09901234567"),
    array("name" => "Lebron James", "image" => "images/lebron.jpg", "age" => 19, "birthday" => "Aug 27, 2005", "contact" => "09012345678")
);

usort($people, function ($a, $b) {
    return strcasecmp($a["name"], $b["name"]);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array Sorted Contacts</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="page">
        <h1>Array Sorted Contacts</h1>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($people as $person) { ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo htmlspecialchars($person["name"], ENT_QUOTES, "UTF-8"); ?></td>
                        <td>
                            <img
                                class="avatar"
                                src="<?php echo htmlspecialchars($person["image"], ENT_QUOTES, "UTF-8"); ?>"
                                alt="Avatar for <?php echo htmlspecialchars($person["name"], ENT_QUOTES, "UTF-8"); ?>"
                            />
                        </td>
                        <td><?php echo htmlspecialchars((string)$person["age"], ENT_QUOTES, "UTF-8"); ?></td>
                        <td><?php echo htmlspecialchars($person["birthday"], ENT_QUOTES, "UTF-8"); ?></td>
                        <td><?php echo htmlspecialchars($person["contact"], ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
