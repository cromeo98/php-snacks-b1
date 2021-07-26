<!-- Snack 1
1 Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
2 Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->
<?php

    $games = [
        [
            'game1HomeTeam' => 'Cagliari',
            'game1AwayTeam' => 'Olimpia Milano',
            'game1HomeTeamPts' => rand(40, 60),
            'game1AwayTeamPts' => rand(40, 60)
        ],
        [
            'game2HomeTeam' => 'Cantù',
            'game2AwayTeam' => 'Cagliari',
            'game2HomeTeamPts' => rand(40, 60),
            'game2AwayTeamPts' => rand(40, 60)
        ],
        [
            'game3HomeTeam' => 'Verona',
            'game3AwayTeam' => 'Virtus',
            'game3HomeTeamPts' => rand(40, 60),
            'game3AwayTeamPts' => rand(40, 60)
        ],
    ];

    var_dump($games);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php echo $games ?>
    </p>
    
</body>
</html>