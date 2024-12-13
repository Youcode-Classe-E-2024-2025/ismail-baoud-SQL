<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my desaigne</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

        footer {
            margin-top: auto;
        }
    </style>
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link link-underline p-0 me-3" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_relations_user.php">Package - Author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="display_relation_versions_user.php">packages - versions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 me-3" href="../../../index.php">log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php include "../../../connection.php" ?>
    <div class="row mt-5 ">
        <div class="card mx-auto box" style="width: 18rem; opacity: 0;">
            <img class="card-img-top" src="../../images/1_iG1rHUl0C48LzRtfyVOXNg.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Gestion centralisée des packages</p>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <p class="lead"  id="quote" style="color: #black;text-align: center;">Modernisation de la gestion des packages
                Dans le monde en constante évolution du développement JavaScript, il est crucial de gérer efficacement
                les packages et leurs versions. Actuellement, de nombreux développeurs se retrouvent avec des systèmes
                désorganisés, laissant les informations sur les packages éparpillées et difficiles à retrouver. Notre
                application web vise à centraliser la gestion des packages et des auteurs, simplifiant ainsi le
                processus pour améliorer la productivité et réduire les confusions. En créant un outil unifié, nous
                souhaitons rendre l'expérience de gestion des packages fluide, organisée et intuitive.</p>
        </div>
    </div>

    <div class="card mb-3 mt-5">
        <div class="card-body">
            <h5 class="card-title">Suivi des auteurs et de leurs contributions</h5>
            <p class="card-text">Le projet vise à centraliser la gestion des packages JavaScript au sein d'une
                plateforme unique et intuitive. Actuellement, les informations sur les packages sont dispersées.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 days ago</small></p>
        </div>
        <img class="card-img-top" src="../../images/Data-Thinking-1.png" alt="Card image cap">

    </div>
    <div class="card" mt-5>
        <div class="card-body">
            <h5 class="card-title">Facilité de recherche et de filtrage</h5>
            <p class="card-text">L'application offrira une fonctionnalité de recherche puissante permettant aux
                utilisateurs de trouver facilement des packages en fonction de l'auteur ou de mots-clés.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <img class="card-img-bottom" src="../../images/image1.jpg" alt="Card image cap">
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Package Pro. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        gsap.to(".box", {
        duration: 0.5,
        opacity: 1,
        x: 100,
        rotation: 360,
        });

// var tl = gsap.timeline(),
//   mySplitText = new SplitText("#quote", { type: "words,chars" }),
//   chars = mySplitText.chars; //an array of all the divs that wrap each character

// gsap.set("#quote", { perspective: 400 });

// console.log(chars);

// tl.from(chars, {
//   duration: 0.8,
//   opacity: 0,
//   scale: 0,
//   y: 80,
//   rotationX: 180,
//   transformOrigin: "0% 50% -50",
//   ease: "back",
//   stagger: 0.01
// });
//   tl.restart();

    </script>
</body>

</html>