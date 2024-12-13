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
$query = "SELECT id, package_name, package_description, created_at, author_id FROM packages";
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
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
    <?php include "../controllers/add_all_data.php" ?>
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link link-underline p-0 me-3" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_packages.php">All Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3 " href="display_authors.php">All Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_relations.php">Package - Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_relation_versions.php">packages - versions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_versions.php">versions</a>
                </li>
                <li class="nav-item w-auto">
                    <a class="nav-link p-0 me-3 " href="add_form.php"> Add package - author</a>
                </li>

            </ul>
        </div>
    </nav>
    <?php include "../config/connection.php" ?>
    <div class="container">
        <h4 class="center-align">author informations</h4>
        <form action="#" method="post">
            <div class="input-field">
                <label for="name">Full Name</label>
                <input type="text" name="auteur" class="validate" placeholder="Enter your name">
                <span class="text-danger"><?php echo $nameerr; ?></span>
            </div>
            <div class="input-field">
                <label for="email">Email Address</label>
                <input type="email" name="auteur_email" class="validate" placeholder="Enter your email">
                <span class="text-danger"><?php echo $emailerr; ?></span>

            </div>
            <input type="submit" name="add_author" value="submit" class="btn">
        </form>
    </div>
    <div class="container">
        <h4 class="center-align">Package Information</h4>
        <form action="#" method="post">
            <div class="input-field">
                <label for="packageName">Package Name</label>
                <input type="text" id="packageName" name="package_name" class="validate"
                    placeholder="Enter package name">
                <span class="text-danger"><?php echo $package_nameerr; ?></span>
            </div>
            <div class="input-field">
                <label for="packageDescription">Package Description</label>
                <input type="text" id="packageDescription" name="package_description" class="validate"
                    placeholder="Enter package description">
                <span class="text-danger"><?php echo $package_descriptionerr; ?></span>

            </div>
            <div class="input-field">
                <label for="updatedAt">Updated At</label>
                <input type="date" id="updatedAt" class="validate" name="updated_at" placeholder="Enter update date">
                <span class="text-danger"><?php echo $updated_aterr; ?></span>
            </div>
            <div class="input-field">
                <label for="updatedAt">author name</label>
                <input type="text" id="updatedAt" name="author_name" class="validate" placeholder="Enter update date">
                <span class="text-danger"><?php echo $name_authorerr; ?></span>
            </div>

            <input type="submit" name="add_package" value="submit" class="btn">
        </form>
    </div>
    <div class="container">
        <h4 class="center-align">add new version package</h4>
        <form action="#" method="post">
            <div class="input-field">
                <label for="name">package name</label>
                <input type="text" name="name_package_for_version" class="validate" placeholder="Enter name of package">
                <span class="text-danger"><?php echo $name_package_for_versionwrr; ?></span>
            </div>
            <div class="input-field">
                <label for="email">version</label>
                <input type="text" name="version_name" class="validate" placeholder="Enter version (11.11.1.1)">
                <span class="text-danger"><?php echo $version_nameerr; ?></span>
            </div>
            <div class="input-field">
                <label for="date">date of version</label>
                <input type="date" name="version_date" class="validate" placeholder="Enter update date">
                <span class="text-danger"><?php echo $version_dateerr; ?></span>
            </div>
            <input type="submit" name="add_version" value="submit" class="btn">
        </form>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 package pro. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>