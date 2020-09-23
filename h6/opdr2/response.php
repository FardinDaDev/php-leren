<?php

$email = $_POST["email"];
$pass = $_POST["password"];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=login', "root", "");

    foreach ($dbh->query("SELECT * FROM user WHERE email='" . $email . "'") as $row) {
        if ($row["email"] == $email && $row["password"] == $pass) {
            echo "Welkom!";
        } else {
            echo "Geen toegang!";
        }
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
