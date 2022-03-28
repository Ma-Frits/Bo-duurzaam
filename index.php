<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" defer></script>
    <script src="main.js" defer></script>
    <title>Dashboard</title>
</head>

<body>
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
                    <img class="greenHomeLogo" src="img/logo.png" alt="het logo van green home">
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <canvas class="myChart" id="myChart" width="2000" height="500"></canvas>
            <canvas class="zonnepanelen" id="js--zonnepanelen" width="2000" height="500"></canvas>
            <!-- <canvas class="myChart" id="waterVerbruik" width="2000" height="500"></canvas> -->
        </section>
        
        <!-- Weerbericht -->
        <section>
            <?php   
                $json = file_get_contents("https://data.buienradar.nl/2.0/feed/json");
                $data = json_decode($json);
                $forecast = $data->forecast->fivedayforecast[0];

                $minTemperatuur = $forecast->mintemperatureMin;
                $maxTemperatuur = $forecast->maxtemperatureMax;
                $weerBeschrijving = $forecast->weatherdescription;
                $icon = $forecast->iconurl;
            ?>
        <section>
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

<<<<<<< HEAD
        <!-- waterverbruik -->
        <!-- <section class="lijnGrafiekWater">
        <canvas id="waterVerbruik"></canvas>
        </section>
        <script src="script.js" defer></script> -->
        

=======
>>>>>>> 600cf22a653c06686784f911e34613467a208347
    </main>
    <footer>

    </footer>
    </div>



</body>

</html>