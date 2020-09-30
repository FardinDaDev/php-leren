<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakkerij Wim Vlecht</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>

    <p>Welkom bij Bakkerij de Vlecht, sinds 1874 verkopen wij sappige puntige krokante brood</p>

    <?php
    require("Brood.php");

    $broodoverzicht = new BroodOverzicht();

    foreach ($broodoverzicht->getBroodjes() as $brood) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Soort</th>
                <th>Vorm</th>
                <th>Gewicht</th>
            </tr>";

        echo "<td>" . $brood->getId() . "</td>";

        echo "<td>" . $brood->getNaam() . "</td>";

        echo "<td>" . $brood->getSoort() . "</td>";

        echo "<td>" . $brood->getVorm() . "</td>";

        echo "<td>" . $brood->getGewicht() . "</td>";

        echo "<caption align='right'><a style='text-align: right;' href='dashboard.php'>Edit</a></caption>";

        echo "</tr>";

        echo "</table>";
    }

    ?>

</body>

</html>