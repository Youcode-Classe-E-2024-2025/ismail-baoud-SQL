<?php 
require('connection.php');
$result2=null;
if(isset($_POST["submit"])){
    $package_name = $_POST["package_name"];
    $package_description = $_POST["package_description"];
    $created_at = $_POST["created_at"];
    $updated_at = $_POST["updated_at"];
    $id_ref = $_POST["id_ref"];
    


    
    $query = "INSERT INTO packages (package_name,package_description,created_at,updated_at,author_id) VALUES ('$package_name','$package_description','$created_at','$updated_at','$id_ref')";
    $result2 = $conn->query($query);
    if($result2){
        echo "********add package avec secces";
    }

}

$result1=null; 
if(isset($_POST["add_author"])){
    $auteur = $_POST["auteur"];
    $auteur_email = $_POST["auteur_email"];
    $query = "INSERT INTO authors (name , email) VALUES ('$auteur', '$auteur_email')";
    $result1 = $conn->query($query);
}
if($result1 ){
    echo "********add author avec secces";
}
?>



