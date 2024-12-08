<?php 
require('connection.php');

if(isset($_POST["clear_all_data"])){
    $query = "DELETE FROM packages";
    if($conn->query($query)){
        echo "deleted all data from the table";
    }
}

?>