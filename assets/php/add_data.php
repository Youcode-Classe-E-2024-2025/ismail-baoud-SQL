<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$conn) {
    echo "connection failed: ";
}
$result2 = null;
if (isset($_POST["submit"])) {
    $package_name = $_POST["package_name"];
    $package_description = $_POST["package_description"];
    $created_at = $_POST["created_at"];
    $updated_at = $_POST["updated_at"];
    $name_author = $_POST["author_name"];

    $query = "SELECT id FROM authors WHERE name like '$name_author'";
    $result = $conn->query($query);
    if ($row = $result->fetch_assoc()) {
        $id_ref = $row["id"];
            $query = "INSERT INTO packages (package_name,package_description,created_at,updated_at,author_id) VALUES ('$package_name','$package_description','$created_at','$updated_at',$id_ref)";
            $result2 = $conn->query($query);
            if ($result2) {
                echo "********add package avec secces";
            }
        }else{ 
               echo "no author";
            }

    }



$result1 = null;
if (isset($_POST["add_author"])) {
    $auteur = $_POST["auteur"];
    $auteur_email = $_POST["auteur_email"];
    $query = "INSERT INTO authors (name , email) VALUES ('$auteur', '$auteur_email')";
    $result1 = $conn->query($query);
}
if ($result1) {
    echo "********add author avec secces";
}
?>