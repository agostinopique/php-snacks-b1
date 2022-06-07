<?php

/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$longParagraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi vero delectus dolorum amet placeat soluta odio distinctio voluptates, illum aliquid laborum tenetur. Cum quas officia quod temporibus, eos nobis ratione vero perspiciatis praesentium vel doloremque distinctio voluptates, aliquid, repudiandae dicta blanditiis? Dignissimos quis labore, mollitia ipsam laborum aliquam aperiam nesciunt reiciendis doloribus laboriosam accusamus qui. Est totam nisi omnis earum. Distinctio cupiditate excepturi eaque ipsa maxime perferendis praesentium numquam ab, blanditiis corporis beatae molestiae natus iusto pariatur iure itaque quia accusantium ipsum enim ducimus, possimus explicabo culpa. Vero error labore eligendi atque cumque vel provident sequi. Voluptas inventore quae laboriosam.';

$separatedStrings = explode(".", $longParagraph);

var_dump($separatedStrings)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack-5</title>
</head>
<body>
    <h1>Suddividi il paragrafo</h1>
    <p><?php echo $longParagraph ?></p>
    <ul>
        <?php for($i = 0; $i < count($separatedStrings); $i++): 
            
            if(!empty($separatedStrings[$i])):?>
            <li><?php echo $separatedStrings[$i] ?></li>
            <?php endif ?>

        <?php endfor ?>

    </ul>
</body>
</html>