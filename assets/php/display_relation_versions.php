<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "gestion_des_packages";

$conn = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$conn) {
    echo "connection failed: ";
}
$query = "SELECT packages.package_name , versions.version FROM versions INNER JOIN packages ON  versions.package_id = packages.id";
$result = $conn->query($query);




$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .d-flex {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link bg-secondary btn me-3" href="../../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="display_packages.php">All Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="display_authors.php">All Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="display_relations.php">Package / Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="display_relation_versions.php">packages/versions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="display_versions.php">versions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-success btn" href="add_form.php"> Add package / author</a>
                </li>

            </ul>
        </div>
    </nav>
    <?php include "../../connection.php" ?>
    <table class="table table-striped text-center ">

        <tr>
            <th scope="col">package name</th>
            <th scope="col">version</th>
        </tr>
        <?php

        while ($row = $result->fetch_assoc()) {
            echo
                "<tr>
            <td>" . $row["package_name"] . "</td>
            <td>" . $row["version"] . "</td>
            
        </tr>";
        }
        ?>
    </table>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Package pro. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
</body>

</html>