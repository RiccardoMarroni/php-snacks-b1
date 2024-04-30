<?php 
    $posts = [
        '10/08/2010' => [
            'title' => 'Post 1',
            'author' => 'riccardo marroni',
            'text' => 'Testo post 1'
        ],
        '10/08/2011' => [
            'title' => 'Post 1',
            'author' => 'riccardo marroni',
            'text' => 'Testo post 1'
        ],
        '10/08/2012' => [
            'title' => 'Post 1',
            'author' => 'riccardo marroni',
            'text' => 'Testo post 1'
        ]
    ]




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=6, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
          for($i = 0; $i < count($posts); $i++){
             $string = "{$posts[$i]['title']} {$posts[$i]['author']} {$posts[$i]['text']}<br>";
            echo $string;
          };
    
        
        
        ?>
    </div>
</body>
</html>