<?php 
require('connection.php');

if(isset($_POST["submit"])){
    $package_name = $_POST["package_name"];
    $package_description = $_POST["package_description"];
    $created_at = $_POST["created_at"];
    $updated_at = $_POST["updated_at"];
    $auteur = $_POST["auteur"];
    $auteur_email = $_POST["auteur_email"];

    $query = "INSERT INTO authors (name , email) VALUES ('$auteur', '$auteur_email')";
    $result = $conn->query($query);


    $query = "INSERT INTO packages (package_name,package_description,created_at,updated_at) VALUES ('$package_name','$package_description','$created_at','$updated_at')";
    $result = $conn->query($query);
    if($result){
    echo "add avec secces";
}
}

$sql = "
    SELECT p.package_name, p.package_description, a.name AS author_name
    FROM packages p
    INNER JOIN package_author pa ON p.id = pa.package_id
    INNER JOIN authors a ON pa.author_id = a.id
";

// Execute the query
$resul = $conn->query($sql);

// Check if there are results
if ($resul->num_rows > 0) {
    // Loop through the results
    while($row = $resul->fetch_assoc()) {
        echo "Package Name: " . $row['package_name'] . "<br>";
        echo "Description: " . $row['package_description'] . "<br>";
        echo "Author: " . $row['author_name'] . "<br><br>";
    }
} else {
    echo "No results found.";
}
$conn->close();

?>



