<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kerstboom</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>

        body {
            text-align: center;
        }

        </style>
    </head>
    <body>

    <?php

    for($i = 0; $i < 9; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>
    
    </body>
</html>