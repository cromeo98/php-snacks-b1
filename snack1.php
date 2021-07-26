<!-- Snack 1
1 Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
2 Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->
<?php

    $games = [
        [
            'homeTeam' => 'Cagliari',
            'awayTeam' => 'Olimpia Milano',
            'homeTeamPts' => rand(40, 60),
            'awayTeamPts' => rand(40, 60)
        ],
        [
            'homeTeam' => 'Cantù',
            'awayTeam' => 'Cagliari',
            'homeTeamPts' => rand(40, 60),
            'awayTeamPts' => rand(40, 60)
        ],
        [
            'homeTeam' => 'Verona',
            'awayTeam' => 'Virtus',
            'homeTeamPts' => rand(40, 60),
            'awayTeamPts' => rand(40, 60)
        ],
    ];

    $arrLength = count($games);

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

    <ul>
    <?php for($i = 0; $i < $arrLength; $i++) { ?>

        <li><?php echo $games[$i]['homeTeam'] . ' - ' . $games[$i]['awayTeam']. ' | ' . $games[$i]['awayTeamPts'] . '-' . $games[$i]['awayTeamPts']?></li>

    <?php } ?>
    </ul>
    
</body>
</html>