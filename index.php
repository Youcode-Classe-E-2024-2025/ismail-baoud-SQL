<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my project php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        label{
            display: block;
        }
        input,th,td{
            border: 3px black solid;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <form method="post">
                <label>package name</label>
                    <input type="text" name="package_name">
                <label>package description</label>
                    <input type="text" name="package_description">
                <label>created at</label>
                    <input type="date" name="created_at">
                <label>updated at</label>
                    <input type="date" name="updated_at">
                <label>auteur</label>
                    <input type="text" name="auteur">
                <label>auteur email</label>
                    <input type="text" name="auteur_email">
                <input type="submit" name="submit" value="submit">
                <input type="submit" name="clear_all_data" value="clear_all_data">
        </form>
    </div>

    <?php include "./assets/php/user_page.php";?> 

    

</body>
</html>
