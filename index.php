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
        <canvas class="zonnepanelen" id="js--zonnepanelen"></canvas>
        </section>
        <section class="section section--zonnepanelen">
            <?php
                include "weerbericht.php";
            ?>
        </section>
        <section class="section section--third">
            <h2 id="js--showname">Plaats</h2>
            <p id="js--showtekst">Weer</p>
            <p id="js--graden">celsius</p>
            <p id="js--wind">km/u</p> 
            <p id="js--weercode"></p>
            <img id="js--image" src="" alt="">
        </section>
        <section class="section section--fourth">
            <div id="chart-zonnepanelen"></div>
        </section>
        <section class="section section--fifth">
            <canvas class="waterverbruik" id="js--waterVerbruik"></canvas>
        </section>
        <!-- data sensor gebruik -->
        <section class="section section--sensor">
            <!-- <div id="dataDiv"></div> -->
                <article class="card">
                    <h2>Keuken</h2>
                    <IFRAME SRC="https://32934.hosts1.ma-cloud.nl/Duurzaam-Huis-2022-IOT-Sensordata-main/HTML/getdata.html" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></IFRAME>
                </article>
                <article class="card">
                    <h2>Slaapkamer</h2>
                    <IFRAME SRC="http://34034.hosts1.ma-cloud.nl/duurzaamhuis/HTML/getdata.html" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></IFRAME>
                </article>
                <article class="card">
                    <h2>Woonkamer</h2>
                    <iframe src="https://33257.hosts1.ma-cloud.nl/duurzaam/getdata.html" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></iframe>
                </article>
                <article class="card">
                    <h2>Badkamer</h2>
                    <iframe src="https://33333.hosts1.ma-cloud.nl/duurzaamHuis/getdata.html" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></iframe>
                </article>
        </section>
        <!-- buienradar Frits -->
        <section class="section section--six">
            <h2>Buienradar voor de aankomende dagen</h2>
            <IFRAME class="buienradar" SRC="https://gadgets.buienradar.nl/gadget/radarfivedays" NORESIZE SCROLLING=NO HSPACE=0 VSPACE=0 FRAMEBORDER=0 MARGINHEIGHT=0 MARGINWIDTH=0 WIDTH=256 HEIGHT=406></IFRAME>
        </section>
        <section class="section section--seven">
            <h2>Rishad</h2>
            <p> 
                School temperatuur: <br>
                temperatuur: -10.70 Celcius <br>
                Humidity: 144.00% <br>
                Heatindex: -12.10 <br>
                Lichtsensor eenheid Lumen: 15
            </p>
        </section>
        <section class="section section--eight">
            <h2>Ricardo</h2>
            <p>
                Datum - Stand (dag) in kWh: <br> 
                27/03/2022 - 006369 - 007627 <br> 
                28/03/2022 - 006476 - 008684 <br> 
                29/03/2022 - 007247 - 007679 <br> 
                30/03/2022 - 006472 - 008384 <br> 
                31/03/2022 - 007742 - 008279 <br> 
            </p>
        </section>

    </main>

</body>

</html>



