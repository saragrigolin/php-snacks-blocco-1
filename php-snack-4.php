<?php
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $newArray = [];
    while (count($newArray) < 15){
        $number = rand(1, 100);
        
        //se l'array non contiene già il numero, lo pusho
        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }
    var_dump($newArray);
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
        <?php for ($i=0; $i < count($newArray); $i++) { ?>
        <li> <?php echo $newArray[$i]; ?> </li>
        <?php } ?>
    </ul>
</body>
</html>