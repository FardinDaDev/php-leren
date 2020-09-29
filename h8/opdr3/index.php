<?php

include_once("Auto.php");

$merk = isset($_GET["merk"]) ? $merk = $_GET["merk"] : "";
$minPrice = isset($_GET["minPrice"]) && $_GET["minPrice"] ? $minprijs = $_GET["minPrice"] : 0;
$maxPrice = isset($_GET["maxPrice"]) && $_GET["maxPrice"] ? $maxprijs = $_GET["maxPrice"] : 99999999;


$autooverzicht = new AutoOverzicht();
$autooverzicht->voegAutoToe(new Auto("Audi", "Type-1", 10000, "https://media2.autokopen.nl/afbeeldingen/audi-a3-sportback-303757-1920.jpg"));
$autooverzicht->voegAutoToe(new Auto("Audi", "Type-3", 15000, "https://zerauto.nl/wp-content/uploads/sites/2/2020/05/Audi-Q5-50-TFSI-e-plug-in-hybride-2020-test-AutoRAI.nl-FOTO-027.jpg"));
$autooverzicht->voegAutoToe(new Auto("Ford", "Type-7", 20000, "https://media2.autokopen.nl/afbeeldingen/ford-kuga-301114-1920.jpg"));
$autooverzicht->voegAutoToe(new Auto("Toyota", "Type-9B", 40000, "https://t1-cms-1.images.toyota-europe.com/toyotaone/nlnl/Header_Cover_tcm-22-1943880.jpg"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autootjes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>

    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <form action="index.php" method="GET">
                        <div class="field">
                            <label class="label">Selecteer een automerk</label>
                            <div class="control">
                                <div class="select">
                                    <select name="merk">
                                        <option value="">---Alle automerken---</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Toyota">Toyota</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Minimum Prijs</label>
                            <div class="control">
                                <input class="input" name="minPrice" type="text" placeholder="Voer een prijs in euro's in">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Maximum Prijs</label>
                            <div class="control">
                                <input class="input" name="maxPrice" type="text" placeholder="Voer een prijs in euro's in">
                            </div>
                        </div>
                        <button class="button">Submit</button>
                </div>
                </form>

            </div>

            <!-- Auto column -->
            <div class="columns auto-column">
                <div class="column">
                    <?php       
                        foreach ($autooverzicht->getGefilterdeLijst($minPrice, $maxPrice, $merk) as $auto) {
                            echo $auto->getMerk() . " - " .$auto->getPrijs() . "<br />";
                            echo '<img width=512 height=512 src="' . $auto->getUrl() . '"alt=""/> <br/>';
                        } 
                        ?>

                    
                </div>
            </div>
        </div>
    </section>
</body>

</html>