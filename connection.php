<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = mysqli_connect($server_name, $user_name, $password, $database_name);

    if (!$conn) {
        throw new Exception("<p class='text-center text-bg-danger'>You are not connected to the database...</p>");
    } else {
        echo "<p class='text-center text-bg-success'>You are connected with the database...</p>";
    }
} catch (mysqli_sql_exception $e) {
    echo "<p class='text-center text-bg-danger'>Connection failed: " . $e->getMessage() . "</p>";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
