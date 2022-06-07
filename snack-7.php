<?php 

/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, surname e un array contenente i suoi vote scolastici. Stampare Nome, surname e la media dei vote di ogni alunno. */

$students = [
    [
        "name" => "Francesco",
        "surname" => "Ferdinando",
        "vote" => [5, 6, 8, 9, 7, 7]
    ],
    [
        "name" => "Carl",
        "surname" => "Marx",
        "vote" => [7, 9, 8, 9, 7, 8]
    ],
    [
        "name" => "Wolfgang",
        "surname" => "Mozart",
        "vote" => [7, 6, 8, 9, 7, 7]
    ],
    [
        "name" => "Ugo",
        "surname" => "Foscolo",
        "vote" => [5, 6, 8, 9, 7, 9]
    ],
    [
        "name" => "Enrico",
        "surname" => "Fermi",
        "vote" => [6, 6, 8, 9, 8, 7]
    ],
];

var_dump($students);

function averageCalculator($voteArr){

    $sumVote = 0;

    for($i = 0; $i < count($voteArr); $i++){
        $sumVote += $voteArr[$i];
    }
    $averageVote = $sumVote / count($voteArr);

    if(!is_int($averageVote)){
        return number_format($averageVote, 2, ',', '');
    }

    return $averageVote;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack-7</title>
</head>
<body>
    <h1>Resoconto dell'alunno:</h1>
    <ul>
        <?php for($i = 0; $i < count($students); $i++): ?>
            <li><?php echo $students[$i]['name']. ' '. $students[$i]['surname']. ' - '. averageCalculator($students[$i]["vote"]) ?></li>
        <?php endfor?>
    </ul>
</body>
</html>