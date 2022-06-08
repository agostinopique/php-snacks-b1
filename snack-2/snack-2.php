<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$isAuth = true;

// $accessPermission = "Accesso Negato";

var_dump($_GET);
/* 
if(strlen($name) < 3) and strpos($email, '@') and is_numeric($age)){
    $accessPermission = "Accesso Riconosciuto";
} */

if(empty($name) || empty($email) || empty($age)){
    $isAuth = false;
} elseif(strlen($name) < 3){
    $isAuth = false;
} elseif(!strpos($email, '@') || !strpos($email, '.')){
    $isAuth = false;
} elseif(!is_numeric($age)){
    $isAuth = false;
}

if($isAuth){
    $accessPermission = "Accesso Riconosciuto";
} else{
    $accessPermission = "Accesso Negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack-2></title>
</head>
<body>
    <h1>Hello snack</h1>
    <p> <?php echo $accessPermission ?> </p>
    
</body>
</html>