
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arrnumber = [];
    for($i = 0; $i <= 15; $i++){
        $numeri = rand(1,100);
        if(!in_array($numeri, $arrnumber)){
            $arrnumber = $numeri;
            echo '<li>';
            echo $arrnumber;
            echo '</li>';
        }     
    };
    ?>
</body>
</html>