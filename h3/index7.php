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

        // grote spaghetti if else chain 

        if($club >= 5 && $club < 10) {
            echo $zwem;
        } else if ($club >= 10 && $club < 15) { 
            echo $zwem;
            echo $zwem;
        } else if ($club >= 15 && $club < 20) { 
            echo $zwem;
            echo $zwem;
            echo $zwem;
        } else if ($club >= 20 && $club < 25) { 
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;

        } else if ($club >= 25 && $club < 30) { 
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;

        } else if ($club >= 30 && $club < 35) {
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;
            echo $zwem;

        }

    }

?>
    
</body>
</html>