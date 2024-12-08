
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="d-flex flex-column justify-content-center mt-4 align-items-center">
<?php include "./assets/php/clear_all_data.php"; ?> 

<?php include "./assets/php/add_data.php"; ?> 

    <table>
        <tr>
            <th>id</th>
            <th>package_name</th>
            <th>package_description</th>
            <th>created_at</th>
            <th>updated_at</th>
         </tr>
         <?php include "./assets/php/display_data.php"; ?> 
    </table>
</div>
</body>
</html>
