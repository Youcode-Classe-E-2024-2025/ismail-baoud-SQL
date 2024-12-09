<?php
require('connection.php');
$query = null;
$result = null;
$query = "SELECT packages.package_name , authors.name FROM authors INNER JOIN packages ON  packages.author_id = authors.id";
$result = $conn->query($query);
while($row = $result->fetch_assoc()){
    echo 
            "<tr>
                <td>" . $row["package_name"] . "</td>
                <td>" . $row["name"] . "</td>

            </tr>";


            

}
$conn->close();
?>