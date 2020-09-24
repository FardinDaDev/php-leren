<?php

$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apen Business</title>
</head>

<body>

<?php foreach($apen as $aap) { ?>
    ​<a href="https://www.google.nl/search?q=<?= $aap; ?>&tbm=isch"><?= $aap; ?></a><br>
<?php } ?>

</body>

</html>