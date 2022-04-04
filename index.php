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
                include "weerbericht.php";
            ?>
        </section>
        <section class="section section--zonnepanelen">
        <div id="chart-zonnepanelen"></div>
            <canvas class="zonnepanelen" id="js--zonnepanelen"></canvas>
        </section>
        <section class="section section--third">
            <canvas class="waterverbruik" id="js--waterVerbruik"></canvas>
        </section>
        <section class="section section--fourth">
        </section>
        <!-- data sensor gebruik -->
        <section>
            <div id="dataDiv"></div>
        </section>
        <section>
            <div id="dataDiv1"></div>
        </section>
        <section>
            <IFRAME SRC="https://gadgets.buienradar.nl/gadget/radarfivedays" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></IFRAME>
            <canvas></canvas>
        </section>
    </main>

</body>

</html>



