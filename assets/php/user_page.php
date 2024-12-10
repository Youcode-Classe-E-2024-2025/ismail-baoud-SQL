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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

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
<div class="container">
        <h4 class="center-align">author informations</h4>
        <form method="post">
            <div class="input-field">
                <label for="name">Full Name</label>
                <input type="text" name="auteur" class="validate" placeholder="Enter your name">
            </div>
            <div class="input-field">
                <label for="email">Email Address</label>
                <input type="email" name="auteur_email"  class="validate" placeholder="Enter your email">
            </div>
            <input type="submit" name="add_author" value="submit" class="btn">
        </form>
    </div>
    <div class="container">
        <h4 class="center-align" >Package Information</h4>
        <form method="post">
            <div class="input-field">
                <label for="packageName">Package Name</label>
                <input type="text" id="packageName" name="package_name" class="validate" placeholder="Enter package name">
            </div>
            <div class="input-field">
                <label for="packageDescription">Package Description</label>
                <input type="text" id="packageDescription" name="package_description" class="validate" placeholder="Enter package description">
            </div>
            <div class="input-field">
                <label for="createdAt">Created At</label>
                <input type="date" id="createdAt" class="validate" name="created_at" placeholder="Enter creation date">
            </div>
            <div class="input-field">
                <label for="updatedAt">Updated At</label>
                <input type="date" id="updatedAt" class="validate" name="updated_at" placeholder="Enter update date">
            </div>
            <div class="input-field">
                <label for="updatedAt">author name</label>
                <input type="text" id="updatedAt" name="author_name" class="validate" placeholder="Enter update date">
            </div>
            
            <input type="submit" name="submit" value="submit" class="btn">
        </form>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
    <?php include "add_data.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>
</html>
