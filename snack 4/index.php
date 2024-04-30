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
        for ($i = 0; $i < 15; $i++) {
            $number = (mt_rand(1,100));
            $string =  "$number <br>";
            echo $string ;
        }

        
        ?>
    </div>
</body>
</html>