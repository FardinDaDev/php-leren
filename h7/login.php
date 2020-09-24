<?php

session_start();

if(isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == true) {
    header("Location: dashboard.php");
}

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$pass = isset($_POST["password"]) ? $_POST["password"] : "";

try {

    if (empty($email) || empty($pass)) {
        echo "Vul een email en/of wachtwoord in!";
    } else {
        $dbh = new PDO('mysql:host=localhost;dbname=login', "root", "");

        if (isset($_POST["knop"])) {
            foreach ($dbh->query("SELECT COUNT(*) AS num_rows, email, password, ID, roles FROM user WHERE email='" . $email . "'") as $row) {

                if ($row["num_rows"] > 0) {
                    if ($row["email"] == $email && $row["password"] == $pass) {

                        $_SESSION['email'] = $row["email"];
                        $_SESSION["ID"] = $row["ID"];
                        $_SESSION["roles"] = $row["roles"];
                        $_SESSION["loggedIn"] = true;

                        header("Location: dashboard.php");
                    } else {
                        echo "Geen toegang!";
                    }
                } else {
                    echo "Deze account bestaat niet!";
                }
            }
        }
    }

    $dbh = null;
} catch (PDOException $e) {
    echo "Error! " . $e->getMessage();
    die();
}