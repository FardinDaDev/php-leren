<?php

$user = "root";
$pass = "";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school', $user, $pass);
    foreach ($dbh->query('SELECT * FROM cursist') as $row) {

        echo "<table border='1'>
            <tr>

                <th>Cursistnr</th>

                <th>Naam</th>

                <th>Roepnaam</th>

                <th>Straat</th>

                <th>Postcode</th>

                <th>Plaats</th>

                <th>Geslacht</th>

                <th>Geboortedatum</th>

            </tr>";


        echo "<td>".$row['cursistnr']."</td>";

        echo "<td>".$row['naam']."</td>";

        echo "<td>" . $row['roepnaam'] . "</td>";

        echo "<td>" . $row['straat'] . "</td>";

        echo "<td>" . $row['postcode'] . "</td>";

        echo "<td>" . $row['plaats'] . "</td>";

        echo "<td>" . $row['geslacht'] . "</td>";

        echo "<td>" . $row['geb_datum'] . "</td>";

        echo "</tr>";

        echo "</table>";
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
