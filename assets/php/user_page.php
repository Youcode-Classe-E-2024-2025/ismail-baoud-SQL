
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<div class="flex flex-column justify-content-center mt-4 align-items-center">

<div class="">
    <div><?php include "./assets/php/clear_all_data.php"; ?> </div>
    <div><?php include "./assets/php/add_data.php"; ?> </div>
</div>

    <div class="flex flex-rows gap-5" style="display: flex; flex_derection: rows;">
    <table>
        <tr>
            <th>id</th>
            <th>package_name</th>
            <th>package_description</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>author_id</th>
         </tr>
         <?php include "./assets/php/display_data.php"; ?> 
    </table>
    <table>
        <tr>
            <th>id</th>
            <th>nom d'auteur</th>
            <th>email</th>
         </tr>
         <?php include "./assets/php/add_data_auteur.php"; ?> 

    </table>
    <table>
        <tr>
            <th>package anme</th>
            <th>author name</th>
         </tr>
         <?php include "./assets/php/les_jounteurs.php"; ?> 

    </table>
    </div>
    
    
</div>
</body>
</html>
