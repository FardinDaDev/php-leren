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

    function doTheEcho($number) {
        for($i = 0; $i < $number; $i++) {
            echo "<img width=64 height=64 src='images/zwem.png'>";
        }
    }

    foreach($clubs as $club) {
        echo "$club <br>";


        switch ($club) {
            case $club >= 5 && $club < 10:
                doTheEcho(1);
            break;

            case $club >= 10 && $club < 14:  
                doTheEcho(2);         
            break;

            case $club >= 15 && $club < 19:
                doTheEcho(3);
            break;

            case $club >= 20 && $club < 24:
                doTheEcho(4);
            break;

            case $club >= 25 && $club < 29:
                doTheEcho(5);
            break;

            case $club >= 30 && $club < 34:
                doTheEcho(6);
            break;

        }

    }

?>
    
</body>
</html>