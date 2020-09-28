<?php
include_once("Auto.php");

$audi = new Auto("Audi", "Noder", 6666.66, "https://noder.net");


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
                    <form action="index.php" method="POST">
                        <div class="field">
                            <label class="label">Selecteer een automerk</label>
                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option>---Selecteer---</option>
                                        <option>Ford</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Minimum Prijs</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Voer een prijs in euro's in">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Maximum Prijs</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Voer een prijs in euro's in">
                            </div>
                        </div>
                        <button class="button">Submit</button>
                </div>
                </form>

            </div>

            <!-- Auto column -->
            <div class="column">

            </div>

        </div>
    </section>
</body>

</html>