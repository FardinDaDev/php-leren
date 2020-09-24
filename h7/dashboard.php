<?php
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['email'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Welkom bij de dashboard</title>
    </head>

    <body>
        <h1>Hallo, <?php echo $_SESSION['email']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>

    </html>

<?php
} else {
    header("Location: index.php");
}
?>