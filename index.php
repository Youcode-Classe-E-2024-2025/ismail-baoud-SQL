<?php 
$rexName = "/^[a-zA-Z' -]+$/";
$nameerr = "";
$passworderr = "";
$isvalide = true;
if(isset($_POST["login"])){
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    if (empty($user_name) or !preg_match($rexName, $user_name)) {
        $nameerr = "please enter your user name !";
        $isvalide = false;
    }
    if (empty($password) or  strlen($password)< 8) {
        $passworderr = "please enter your password ( +8 characters) !";
        $isvalide = false;
    }
    if($isvalide){
        if($user_name === "admin" && $password === "admin1234"){
            header('location:./src/views/home.php');
        }
        else{
            header('location:./src/views/user_pages/home_user.php');
        }
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
            <span style="text-align:center; width:100%; font-size:1.5rem; font-weight:600;"><span style="color:red;">welcome</span><span style="color:black;"> to owr</span> <span style="color:blue;">web</span> <span style="color:green;">site</span></span>
        </div>
    </nav>
<div class="container text-center" style="display: grid; justify-content: center; align-items: center; height: 70vh;">
        <div>
            <h4 class="center-align mb-5">LOG IN</h4>
        <form action="#" method="post">
            <div class="input-field">
                <label for="user_name" class="d-block">user name </label>
                <input type="text" id="user_name" name="user_name" class="validate" placeholder="Enter user name">
                <span class="text-danger"><?php echo $nameerr; ?></span>
            </div>
            <div class="input-field">
                <label for="password" class="d-block">password</label>
                <input type="password" id="password" name="password" class="validate" placeholder="Enter password">
                <span class="text-danger"><?php echo $passworderr; ?></span>
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