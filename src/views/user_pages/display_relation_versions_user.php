<?php

require "../../config/connection_db.php";

$query = "SELECT packages.package_name , versions.version,versions.creation_date FROM versions INNER JOIN packages ON  versions.package_id = packages.id";
$result = $conn->query($query);




$conn->close();
?>
<?php 
    
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
        #navbar{
            box-shadow: 0px 1px 10px 1px black;
        }
    </style>
</head>

<body>
<nav id="navbar" class="navbar navbar-expand-lg bg-white sticky-top">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link link-underline p-0 me-3" href="home_user.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_relations_user.php">Package - Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="#">packages - versions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="../../../index.php">log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php include "../../config/connection.php" ?>
    <table class="table table-striped text-center " style="height:80vh;">

        <tr>
            <th scope="col">package name</th>
            <th scope="col">version</th>
            <th scope="col">date of version</th>
        </tr>
        <?php

        while ($row = $result->fetch_assoc()) {
            echo
                "<tr>
            <td>" . $row["package_name"] . "</td>
            <td>" . $row["version"] . "</td>
            <td>" . $row["creation_date"] . "</td>
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