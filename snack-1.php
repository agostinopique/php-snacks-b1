<?php 
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$basketGames = [
        [
            "home" => "Golden State Warriors",
            "guests" => "Boston Celtics",
            "homePoints" => 35,
            "guestPoints" => 40
        ],
        [
            "home" => "Cleveland Cavaliers",
            "guests" => "Chicago Bulls",
            "homePoints" => 45,
            "guestPoints" => 55
        ],
        [
            "home" => "Milwaukee Bucks",
            "guests" => "Dallas Mavericks",
            "homePoints" => 20,
            "guestPoints" => 30
        ],
        [
            "home" => "L.A. Lakers",
            "guests" => "Sacramento Kings",
            "homePoints" => 55,
            "guestPoints" => 30
        ]
    ];

// var_dump($basketGames);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack-1</title>
</head>
<body>
    <h1>This season's games are:</h1>
    <ul>
        <?php for($i = 0; $i < count($basketGames); $i++): ?>

        <li>
            <?php echo $basketGames[$i]["home"].' - '
            .$basketGames[$i]["guests"].' | '
            .$basketGames[$i]["homePoints"].'-'
            .$basketGames[$i]["guestPoints"] ?>
        </li>
        <?php endfor; ?> 
    </ul>
</body>
</html>