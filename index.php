<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" defer></script>
    <script src="main.js" defer></script>

</head>

<body>
    <!-- Header bar -->
    <header>
        <nav>
            <ul>
                <li class="naam">
                    Homeautic
                </li>
                <li class="tijdDatum">
                    <p id="js--datum"></p>
                    <p id="js--tijd"></p>
                </li>
                <li class="logo">
                    <img class="HomeauticLogo" src="img/logo.png" alt="">
                </li>
            </ul>
        </nav>

    </header>

    <main class="container">
        <section class="section section--first">
            <?php
            $json = file_get_contents("https://data.buienradar.nl/2.0/feed/json");
            $data = json_decode($json);
            $forecast = $data->forecast->fivedayforecast[0];

            $minTemperatuur = $forecast->mintemperatureMin;
            $maxTemperatuur = $forecast->maxtemperatureMax;
            $weerBeschrijving = $forecast->weatherdescription;
            $icon = $forecast->iconurl;
            ?>
            <p>
                Weerbericht van vandaag
            </p>
            <figure class="icon">
                <img src="<?php echo $icon ?>" alt="plaatje van het weer">
            </figure>
            <span class="minTemp">
                <?php
                    echo "Min" . " " . $minTemperatuur . "&#8451; <br>";
                ?>
            </span>
            <span class="maxTemp">
                <?php
                    echo "Max" . " " . $maxTemperatuur . "&#8451; <br>";
                ?>
            </span>
            <p class="weerBeschrijving">
                <?php
                    echo $weerBeschrijving;
                ?>
        </section>
        <section class="section section--zonnepanelen">
            <div id="chart"></div>
            <canvas class="zonnepanelen" id="js--zonnepanelen"></canvas>
        </section>
        <section class="section section--third">
            <div id="chart"></div>
            <canvas class="myChart" id="waterVerbruik"></canvas>
        </section>
        <section class="section section--fourth">

        </section>
    </main>

</body>

</html>

</html>