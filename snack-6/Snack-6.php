<?php
/* 
    ## Snack 6
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

  /*   $classColor = null;

    foreach($staff as $people){
        if($people == 'teachers'){
            $classColor = 'grey';
        } elseif ($people == 'pm'){
            $classColor = 'green';
        }
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & CSS</title>
    <style>
        .teachers {
            border: 2px solid grey;
            min-height: 100px;
            min-width: 100px;
        }

        .pm {
            border: 2px solid green;
            min-height: 100px;
            min-width: 100px;
        }
    </style>
</head>
<body>
    <h1>Ciao Mondo!</h1>
    <?php foreach($db as $role => $value): 
        var_dump($role);
        ?>


            <div class="<?php $role ?>">

                <?php foreach($value as $person): ?>

                    <?php echo $person; ?>

                <?php endforeach;?>
            </div>


    <?php endforeach;?>
</body>
</html>