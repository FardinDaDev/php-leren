<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakkerij de Vlecht dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>

    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <form action="addBread.php" method="POST">
                        <div class="field">
                            <h1 class="title is-4">Voeg broodje toe</h1>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label class="label">Naam</label>
                                <div class="control">
                                    <input class="input" name="naam" type="text" placeholder="Naam van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Soort</label>
                                <div class="control">
                                    <input class="input" name="soort" type="text" placeholder="Soort van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vorm</label>
                                <div class="control">
                                    <input class="input" name="vorm" type="text" placeholder="Vorm van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Gewicht</label>
                                <div class="control">
                                    <input class="input" name="gewicht" type="number" placeholder="Gewicht van het broodje...">
                                </div>
                            </div>

                            <button name="knop" class="button">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="column is-half">
                    <form action="addBread.php" method="POST">
                        <div class="field">
                            <h1 class="title is-4">Update broodje</h1>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label class="label">ID</label>
                                <div class="control">
                                    <input class="input" name="ID" type="text" placeholder="ID van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Naam</label>
                                <div class="control">
                                    <input class="input" name="naam" type="text" placeholder="Naam van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Soort</label>
                                <div class="control">
                                    <input class="input" name="soort" type="text" placeholder="Soort van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Vorm</label>
                                <div class="control">
                                    <input class="input" name="vorm" type="text" placeholder="Vorm van het broodje...">
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Gewicht</label>
                                <div class="control">
                                    <input class="input" name="gewicht" type="number" placeholder="Gewicht van het broodje...">
                                </div>
                            </div>

                            <button name="knop" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section>
</body>

</html>