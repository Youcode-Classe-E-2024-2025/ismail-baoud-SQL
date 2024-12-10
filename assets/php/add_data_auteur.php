<?php 

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

$conn = mysqli_connect($server_name,$user_name,$password,$database_name);

if (!$conn) {
    echo "connection failed: ";
}
$query = null;
$result = null;
$query = "SELECT id,name,email  FROM authors";
$result = $conn->query($query);

$conn->close();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       body, html {
            height: 100%;
            margin: 0;
        }

        /* Makes the body use a flexbox layout */
        .d-flex {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Makes the body take the full viewport height */
        }

        /* Ensures footer is pushed to the bottom */
        footer {
            margin-top: auto; /* This pushes the footer to the bottom of the page */
        }
    </style>
</head>
<body>
<section class="d-flex">
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
    <div class="flex-grow-1">
    <table class="table table-striped text-center">
        <thead class="text-center">
        <tr>
            <th scope="col">id</th>
            <th scope="col">nom d'auteur</th>
            <th scope="col">email</th>
        </tr>
        </thead>
        <?php
        while($row = $result->fetch_assoc()){
            echo 
                "<tr><td  scope='row'>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                </tr>";
        }
        ?>
    </table>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
</section>
</body>
</html>