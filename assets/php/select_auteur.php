<?php 

require('connection.php');

$query = "SELECT id,name  FROM authors";
$result = $conn->query($query);

$conn->close();
?>

<!DOCTYPE html>
<body>
    

    <select  name="id_ref">    
    <?php
    while($row = $result->fetch_assoc()){
       echo "<option value=" . $row["id"] .">". $row["name"] . "</option>";
    }
    ?>
    </select>
    
   
</body>
</html>
                