<?php
 $name = $_GET["name"];
 $age = $_GET["age"];
 $mail = $_GET["mail"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            if(strlen($name) < 3 && strpos($mail, '.') !== false && strpos($mail,'@') !== false && is_numeric($age)){
                echo 'accesso riuscito';
            } else{
                echo 'accesso non riuscito';
            }
        
        
        ?>
    </div>
    
</body>
</html>