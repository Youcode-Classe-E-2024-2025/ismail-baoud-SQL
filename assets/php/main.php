<?php 
$package_name = $_POST["package_name"];
$package_description = $_POST["package_description"];
$created_at = $_POST["created_at"];
$updated_at = $_POST["updated_at"];

$conn = mysqli_connect("localhost", "root", "", "gestion_des_packages");

if(!$conn){
    echo "you are not connected";
}

$data = "INSERT INTO packages ( package_name, package_description , created_at , updated_at) VALUES ('$package_name', '$package_description', '$created_at', '$updated_at')";
if(mysqli_query($conn,$data)){
    echo "data is send";
    echo $package_name . "<br>";
    echo $package_description . "<br>";
    echo $created_at . "<br>";
    echo $updated_at . "<br>";
}

?>
