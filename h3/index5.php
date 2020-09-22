<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jan Jaap's apen</title>

    <style>

       .rood {
           border: red 2px solid;
       }

       .groen {
           border:green 2px solid;
       }

    </style>
</head>
<body>

<?php

for($i = 1; $i <= 9; $i++) {

    if($i % 2) {
        $class = "class = 'groen'";
    } else {
        $class = "class = 'rood'";
    }

    echo "<img ".$class." src='images/apen/aap".$i.".jpg'>";
}

?>
    
</body>
</html>