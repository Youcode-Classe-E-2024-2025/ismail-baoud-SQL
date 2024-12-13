<?php 

if(isset($_POST["login"])){
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    if($user_name === "admin" && $password === "admin"){
        header('location:home.php');
    }
    else{
        header('location:./assets/php/user/home_user.php');
    }
}
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

</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top" style="border: solid 1px black;">
        <a class="navbar-brand" href="#">PACKAGES PRO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <span style="text-align:center; width:100%; font-size:1.5rem; font-weight:600;"><span style="color:red;">welcome</span> to owr <span style="color:blue;">web</span> <span style="color:green;">site</span></span>
        </div>
    </nav>
<div class="container text-center" style="display: grid; justify-content: center; align-items: center; height: 70vh;">
        <div>
            <h4 class="center-align mb-5">LOG IN</h4>
        <form action="#" method="post">
            <div class="input-field">
                <label for="user_name" class="d-block">user name </label>
                <input type="text" id="user_name" name="user_name" class="validate"
                    placeholder="Enter user name">
            </div>
            <div class="input-field">
                <label for="password" class="d-block">password</label>
                <input type="password" id="password" name="password" class="validate" placeholder="Enter password">
            </div>

            <input type="submit" name="login" value="Log in" class="btn">
        </form>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Package Pro. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Terms of Service</a>
        </p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>