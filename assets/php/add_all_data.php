<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$conn) {
    echo "connection failed: ";
}
$package_nameerr = "";
$package_descriptionerr = "";
$updated_aterr = "";
$name_authorerr = "";
$rexName = "/^[a-zA-Z' -]+$/";
$rexEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$result2 = null;
$isvalide = true;
if (isset($_POST["add_package"])) {
    $package_name = $_POST["package_name"];
    $package_description = $_POST["package_description"];
    $updated_at = $_POST["updated_at"];
    $name_author = $_POST["author_name"];
    if (empty($package_name) or !preg_match($rexName, $package_name)) {
        $package_nameerr = "please enter valide package name !!!";
        $isvalide = false;
    }
    if (empty($package_description) or !preg_match($rexName, $package_description)) {
        $package_descriptionerr = "please enter description !!!";
        $isvalide = false;
    }
    if (empty($updated_at) or strtotime($updated_at) > time()) {
        $updated_aterr = "please enter date !!! The date cannot be later than today.";
        $isvalide = false;
    }
    if (empty($name_author) or !preg_match($rexName, $name_author)) {
        $name_authorerr = "please enter author name !!!";
        $isvalide = false;
    }
    if ($isvalide) {
        $query = "SELECT id FROM authors WHERE name like '$name_author'";
        $result = $conn->query($query);
        if ($row = $result->fetch_assoc()) {
            $id_ref = $row["id"];
            $query = "INSERT INTO packages (package_name,package_description,updated_at,author_id) VALUES ('$package_name','$package_description','$updated_at',$id_ref)";
            $result2 = $conn->query($query);
            if ($result2) {
                echo "author add with success...";
            }
        } else {
            echo "<script>alert('author is note defined! please add this author first !')</script>";
        }
    }
}


$nameerr = "";
$emailerr = "";
$result1 = null;

if (isset($_POST["add_author"])) {
    $auteur = $_POST['auteur'];
    $auteur_email = $_POST["auteur_email"];
    if (empty($auteur) or !preg_match($rexName, $auteur)) {
        $nameerr = "please enter name !!!";
    } else {
        $query = "INSERT INTO authors (name , email) VALUES ('$auteur', '$auteur_email')";
        $result1 = $conn->query($query);
    }
    if (empty($auteur_email) or !preg_match($rexName, $auteur_email)) {
        $emailerr = "please enter email!!!";
    } else {
        $query = "INSERT INTO authors (name , email) VALUES ('$auteur', '$auteur_email')";
        $result1 = $conn->query($query);
    }
}
if ($result1) {
    echo "<span class='text-success text-center'>add author avec seccess</span>";
}
$name_package_for_versionwrr = "";
$version_nameerr ="";
$version_dateerr = "";
$isvalide_version = true;
if(isset($_POST["add_version"])) {
$name_package_for_version = $_POST["name_package_for_version"];
$version_name = $_POST["version_name"];
$version_date = $_POST["version_date"];
if (empty($name_package_for_version) or !preg_match($rexName, $name_package_for_version)) {
    $name_package_for_versionwrr = "please enter the package name";
    $isvalide_version = false;
}else{
    $name_package_for_versionwrr = "";

}
if (empty($version_name) or !preg_match($rexName, $name_package_for_version)) {
    $version_nameerr = "please enter the version";
    $isvalide_version = false;
}
if (empty($version_date) or strtotime($version_date) > time()) {
    $version_dateerr = "please enter valide date";
    $isvalide_version = false;
}
if($isvalide_version){
$query_id = "SELECT id FROM packages WHERE package_name like '$name_package_for_version'";
$result_id = $conn->query($query_id);
if ($row = $result_id->fetch_assoc()) {
    $id_ref = $row["id"];
    $query_version = "INSERT INTO versions (package_id, version , creation_date) VALUES ($id_ref,'$version_name', '$version_date')";
    $result_version = $conn->query($query_version);
}else{
    echo "<script>alert('package is note defined! please add this package first !')</script>";
}
}
}
?>