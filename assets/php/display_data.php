<?php 
require('connection.php');
$query = null;
$result = null;
$query = "SELECT id, package_name,package_description,created_at,updated_at  FROM packages";
$result = $conn->query($query);

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    while($row = $result->fetch_assoc()){
        echo 
            "<tr><td>" . $row["id"] . "</td>
                <td>" . $row["package_name"] . "</td>
                <td>" . $row["package_description"] . "</td>
                <td>" . $row["created_at"] . "</td>
                <td>" . $row["updated_at"] . "</td> 
            </tr>";
    }
        ?>
</body>
</html>