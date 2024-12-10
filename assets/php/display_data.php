<?php 
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$conn) {
    echo "Connection failed: ";
}
$query = null;
$result = null;
$query = "SELECT id, package_name, package_description, created_at, updated_at, author_id FROM packages";
$result = $conn->query($query);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PACKAGES PRO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link me-6" href="./../../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./display_data.php">All Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./add_data_auteur.php">All Authors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./les_jounteurs.php">Package / Author</a>
      </li>
    </ul>
  </div>
</nav>

    <table class="table table-striped  text-center">
        <thead class=" text-white">
            <tr>
                <th scope="col">id</th>
                <th scope="col">package name</th>
                <th scope="col">package description</th>
                <th scope="col">created at</th>
                <th scope="col">updated at</th>
                <th scope="col">author id</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = $result->fetch_assoc()){
                echo 
                    "<tr><th scope='row'>" . $row["id"] . "</th>
                        <td>" . $row["package_name"] . "</td>
                        <td>" . $row["package_description"] . "</td>
                        <td>" . $row["created_at"] . "</td>
                        <td>" . $row["updated_at"] . "</td> 
                        <td>" . $row["author_id"] . "</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>
