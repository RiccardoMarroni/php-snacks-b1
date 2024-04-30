<?php 

$match = [
  [
    'team1' => 'olimpia milano',
    'team2'=> 'virtus bologna ',
    'score1'=> '55',
    'score2'=> '60',
  ],
  [
    'team1' => 'inter',
    'team2'=> 'juve',
    'score1'=> '89',
    'score2'=> '35',
  ],
  [
    'team1' => 'lazio',
    'team2'=> 'roma',
    'score1'=> '110',
    'score2'=> '98',
  ],

];

for($i = 0; $i < count($match); $i++){
  $string = " {$match[$i]['team1']} -{$match[$i]['team2']} | {$match[$i]['score1']} - {$match[$i]['score2']} <br>";
  echo $string;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
    <title>snack</title>
</head>
<body>
    
</body>
</html>