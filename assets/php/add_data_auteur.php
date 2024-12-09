<?php 

require('connection.php');
$query = null;
$result = null;
$query = "SELECT id,name,email  FROM authors";
$result = $conn->query($query);

$conn->close();

?>

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
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
            </tr>";
    }
        ?>
</body>
</html>