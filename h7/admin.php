<?php
session_start();

if (isset($_SESSION['ID']) && $_SESSION['roles'] == "administrator") {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrator paneel</title>
    </head>

    <body>
        <h1>Welkom <?php echo $_SESSION['email'] ?>! U bent blijkbaar administrator</h1>
    </body>

    </html>
<?php
} else {
    echo "Weg normie, alleen voor de VIPs";
}
?>