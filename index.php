
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my desaigne</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Set the background color of the form to green */
        .popup-form {
            background-color: green;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            color: black;
        }

        /* Optional: Set custom styles for input fields and button */
        .popup-form input,
        .popup-form select,
        .popup-form button {
            background-color: #fff;
            color: #000;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .popup-form button {
            background-color: #28a745;
            /* Green button */
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link bg-secondary btn me-3" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="./assets/php/display_packages.php">All Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="./assets/php/display_authors.php">All Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-secondary btn me-3" href="./assets/php/display_relations.php">Package / Author</a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link btn bg-success" href="./assets/php/add_form.php"> Add package / author</a>
                </li>
            
            </ul>
        </div>
    </nav>
    <?php include "connection.php" ?>
    
    <div class="row mt-5 ">
        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="./assets/images/1_iG1rHUl0C48LzRtfyVOXNg.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Gestion centralisée des packages</p>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <p class="lead">Modernisation de la gestion des packages
                Dans le monde en constante évolution du développement JavaScript, il est crucial de gérer efficacement
                les packages et leurs versions. Actuellement, de nombreux développeurs se retrouvent avec des systèmes
                désorganisés, laissant les informations sur les packages éparpillées et difficiles à retrouver. Notre
                application web vise à centraliser la gestion des packages et des auteurs, simplifiant ainsi le
                processus pour améliorer la productivité et réduire les confusions. En créant un outil unifié, nous
                souhaitons rendre l’expérience de gestion des packages fluide, organisée et intuitive.</p>
        </div>
    </div>

<div class="card mb-3 mt-5">
  <div class="card-body">
    <h5 class="card-title">Suivi des auteurs et de leurs contributions</h5>
    <p class="card-text">Le projet vise à centraliser la gestion des packages JavaScript au sein d’une plateforme unique et intuitive. Actuellement, les informations sur les packages sont dispersées.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
  </div>
  <img class="card-img-top" src="./assets/images/Data-Thinking-1.avif" alt="Card image cap">

</div>
<div class="card" mt-5>
  <div class="card-body">
    <h5 class="card-title">Facilité de recherche et de filtrage</h5>
    <p class="card-text">L'application offrira une fonctionnalité de recherche puissante permettant aux utilisateurs de trouver facilement des packages en fonction de l'auteur ou de mots-clés.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img class="card-img-bottom" src="./assets/images/image1.jpg" alt="Card image cap">
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Package Pro. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
</body>

</html>