<?php 
/* 
    ## Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$db = [
    '01/02/2022'=>[
        [
            "title" => "Post 1",
            "author" => "Michele",
            "text" => "testo testo testo"
        ],
        [
            "title" => "Post 2",
            "author" => "Alfio",
            "text" => "testo testo testo"
        ],
        [
            "title" => "Post 3",
            "author" => "Michele",
            "text" => "testo testo testo"
        ],
    ],
    '10/12/2022'=>[
        [
            "title" => "Post 1",
            "author" => "Gennaro",
            "text" => "testo testo testo"
        ],
        [
            "title" => "Post 2",
            "author" => "Sergio",
            "text" => "testo testo testo"
        ]
    ],
    '12/02/2022'=>[
        [
            "title" => "Post 1",
            "author" => "Agostino",
            "text" => "testo testo testo"
        ],
        [
            "title" => "Post 2",
            "author" => "Stefano",
            "text" => "testo testo testo"
        ],
        [
            "title" => "Post 3",
            "author" => "Stefano",
            "text" => "testo testo testo"
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 3</title>
</head>
<body>
    <h1>Snack 3- POSTS</h1>
    <ul>
        <?php foreach($db as $date => $posts): var_dump($posts)?><br>
            <li><?php echo $date ?>
                <ul><br>
                    <?php foreach($posts as $key => $value):?>
                        <li>
                            <ul><br>
                                <?php foreach($value as $key => $value): ?>
                                    <li><?php echo "$key: $value" ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>

                </ul>

            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>