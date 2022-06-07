<?php 

// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
function getUniqueNumberArr($min, $max, $numberItems){
    $uniqueNumberArr = [];

    while(count($uniqueNumberArr) < $numberItems){
        $newNumber = rand($min, $max);
        if(!in_array($newNumber, $uniqueNumberArr)){
            $uniqueNumberArr[] = $newNumber;
        }
    }
    return $uniqueNumberArr;
}

$numItems = 15;
$newArray = getUniqueNumberArr(1, 100, $numItems);

var_dump($newArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack-4</title>
</head>
<body>
    <h1>Unique numbers in an array</h1>
    <ul> 
        <?php for($i = 0; $i < $numItems; $i++):?>
            <li><?php echo $newArray[$i]?></li>
        <?php endfor ?>
    </ul>
</body>
</html>