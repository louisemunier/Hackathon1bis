<?php include 'API_weather.php'; ?>

<section id="services" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Vos infos météo</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box nom_ville">

                    <?php
                        if (empty($decode_w)) {
                            echo 'La ville n\a pas été reconnue. Merci de rentrer un nom de ville correct.';
                        } else {
                            echo $decode_w['name'];
                        }
                    ?>
                    <!-- <i class="fa fa-4x fa-diamond text-primary sr-icons"></i> -->
                    <!-- <h3>Sturdy Templates</h3> -->
                    <!-- <p class="text-muted">Our templates are updated regularly so they don't break.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box temp">

                    <?php
                        if (empty($decode_w)){
                        echo "...";
                    } else {
                        echo round(($decode_w['main']*1.8 + 32),1);
                    }
                    ?>
                    <sup>0</sup>C

                    <!-- <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i> -->
                    <!-- <h3>Ready to Ship</h3> -->
                    <!-- <p class="text-muted">You can use this theme as is, or you can make changes!</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box type_tps">

                    <?php

                        if (empty($type_temps)){

                        }

                        if ($type_temps == 'Rain'){
                            echo "<img src=\"img/icones/rain-1.png\" alt=\"rain\">\"width='90'";
                        }

                        if ($type_temps ==  'Thunderstorm'){
                            echo "<img src=\"img/icones/lightning.png\"alt=\"lightning\"> \"width='90'";
                        }

                        if ($type_temps ==  'Drizzle'){
                            echo "<img src=\"img/icones/hail.png\" alt=\"hail\"> \" width='90'";
                        }

                        if ($type_temps ==  'Snow'){
                            echo "<img src=\"img/icones/snowflake.png\" alt=\"snowflake\"> \" width='90'";
                        }

                        if ($type_temps ==  'Atmosphere'){
                            echo "<img src=\"img/icones\" alt=\" \"> \" width='90'";
                        }

                        if ($type_temps ==  'Clear'){
                            echo "<img src=\"img/icones/sun.png\" alt=\"sun\"> \" width='90'";
                        }

                        if ($type_temps ==  'Clouds'){
                            echo "<img src=\"img/icons\" alt=\" > \" width='90'";
                        }

                        if ($type_temps ==  'Extreme'){
                            echo "";
                        }

                        else {
                            echo "";
                        }
                    ?>

                    <!-- <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i> -->
                    <!-- <h3>Up to Date</h3> -->
                    <!-- <p class="text-muted">We update dependencies to keep things fresh.</p> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box humidity">

                    <?php
                        if (empty($decode_w)){
                            echo '...';
                        } else {
                            echo $decode_w['main']['humidity'].'%';
                        }


                    ?>

                    <!-- <i class="fa fa-4x fa-heart text-primary sr-icons"></i> -->
                    <!-- <h3>Made with Love</h3> -->
                    <!-- <p class="text-muted">You have to make your websites with love these days!</p> -->
                </div>
            </div>
        </div>
            <div class="deezer_player">
                <?php include 'API_deezer.php' ?>
            </div>
    </div>
</section>

