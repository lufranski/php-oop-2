<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <?php
        require_once('models/product.php');
        require_once('models/category.php');
        require_once('models/type.php');
        require_once('database.php');
    ?>
</head>
<body>
    <?php
        foreach($products as $product){

            echo '<div>' . $product -> name . '</div>';
        }

        var_dump($type);
    ?>
</body>
</html>