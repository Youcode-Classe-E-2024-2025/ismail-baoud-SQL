<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my project php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
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
<button id="add_pack" onclick="add()">add new package</button>

    <div id="tables" >
    <?php include "./assets/php/user_page.php";?> 
    </div>
    <div id="form" class="flex flex-column hidden justify-content-center align-items-center">
        <form method="post">
                <div id="add_package" class="">
                <label>package name</label>
                    <input type="text" name="package_name">
                <label>package description</label>
                    <input type="text" name="package_description">
                <label>created at</label>
                    <input type="date" name="created_at">
                <label>updated at</label>
                <input type="date" name="updated_at"><br>

                <?php include "./assets/php/select_auteur.php";?> 
                </div>
                <!-- <button onclick="add_author()">add author</button> -->
                <div id="add_author">
                    <label>auteur</label>
                        <input type="text" name="auteur">
                    <label>auteur email</label>
                        <input type="text" name="auteur_email">
                    <input type="submit" name="submit" value="submit">
                    <input type="submit" name="clear_all_data" value="clear_all_data">
                    <input type="submit" name="add_author" value="add_author">
                </div>

        </form>
        <form method="post">

        </form>
    </div>
        


    <script>
        let add_package = document.getElementById('form');
        let tables =document.getElementById('tables');
   

        function add(){
            add_package.classList.toggle('hidden');
            tables.classList.toggle('hidden')
        }
        // let add_author = document.getElementById('add_author');
        // let add_package = document.getElementById('add_package');
        // function add_author(){
        //     add_author.classList.toggle('hidden');
        //     add_package.classList.toggle('hidden')
        // }
    </script>

</body>
</html>
