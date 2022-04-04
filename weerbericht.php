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