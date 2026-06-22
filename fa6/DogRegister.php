<p style="text-align:center;">
    <a href="DogView.php">View All Dog Records</a>
</p>
<?php
require 'config.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $breed = $conn->real_escape_string($_POST['breed']);
    $age = $conn->real_escape_string($_POST['age']);
    $address = $conn->real_escape_string($_POST['address']);
    $color = $conn->real_escape_string($_POST['color']);
    $height = $conn->real_escape_string($_POST['height']);
    $weight = $conn->real_escape_string($_POST['weight']);

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success'>New record created successfully!</div>";
    } else {
        $message = "<div class='error'>Error: " . $conn->error . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Information</title>
</head>
<body bgcolor="#2b2b2b" text="#333333">
    <center>
        <br><br>
        <table bgcolor="#ffffff" width="320" cellpadding="10" border="0">
            <tr>
                <td>
                    <font face="Arial" size="2">
                    <form action="DogRegister.php" method="post">
                        Dog Information<br>
                        <?php if(!empty($message)) echo $message; ?>
                        
                        <p>
                            Name<br>
                            <input type="text" name="name" size="40" required>
                        </p>
                        <p>
                            Breed<br>
                            <input type="text" name="breed" size="40" required>
                        </p>
                        <p>
                            Age<br>
                            <input type="text" name="age" size="40" required>
                        </p>
                        <p>
                            Address<br>
                            <input type="text" name="address" size="40" required>
                        </p>
                        <p>
                            Color<br>
                            <input type="text" name="color" size="40">
                        </p>
                        <p>
                            Height<br>
                            <input type="text" name="height" size="40">
                        </p>
                        <p>
                            Weight<br>
                            <input type="text" name="weight" size="40">
                        </p>
                        
                        <p>
                            <input type="submit" value="save" style="width: 100%;">
                        </p>
                        &copy; Crix Brix
                    </form>
                    </font>
                </td>
            </tr>
        </table>
        
        <p>
            <font face="Arial" size="2" color="white">
                After <a href="DogView.php"><font color="#6da2ff">click</font></a> the save button, information will <a href="DogView.php"><font color="#6da2ff">save</font></a> to the database
            </font>
        </p>
    </center>
</body>
</html>