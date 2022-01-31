<?php
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptates quo corrupti beatae pariatur blanditiis ea placeat impedit. Voluptas hic non veritatis. Alias ea ratione voluptatem debitis neque reprehenderit excepturi.";

    //esplodo la stringa
    $output = explode(". ", $paragraph);
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
    <?php foreach ($output as $key => $par) { ?>
    <p><?php echo $par;?></p>
    <?php } ?>
</body>
</html>