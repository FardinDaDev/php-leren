<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwemmen</title>
</head>
<body>

<?php
    $spartelkuikens = 25;
    $waterbuffels = 32;
    $plonsmderin = 11;
    $bommetje = 23;

    $clubs = array($spartelkuikens, $waterbuffels, $plonsmderin, $bommetje);

    foreach($clubs as $club) {
        echo "$club <br>";

        $zwem = "<img width=64 height=64 src='images/zwem.png'>";


        switch ($club) {
            case $club >= 5 && $club < 10:
                echo $zwem;
            break;

            case $club >= 10 && $club < 14:            
                echo $zwem;
                echo $zwem;
            break;

            case $club >= 15 && $club < 19:
                echo $zwem;
                echo $zwem;
                echo $zwem;
            break;

            case $club >= 20 && $club < 24:
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
            break;

            case $club >= 25 && $club < 29:
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
            break;

            case $club >= 30 && $club < 34:
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
                echo $zwem;
            break;

        }

    }

?>
    
</body>
</html>