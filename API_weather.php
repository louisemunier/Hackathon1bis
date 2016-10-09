<?php

foreach ($_POST as $key => $value){

    $post[$key] = htmlentities(str_replace(' ','-',$value));

    if (empty($post)){

    return 'error';

    } else {


        $ville = $post['search'];
        $requete_meteo = "http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&accurate&units=metric&APPID=aaf77036d9252af1eb6e40d782a49bf0";
        $data_meteo = @file_get_contents($requete_meteo);
        $decode_w = json_decode($data_meteo, true);
        $type_temps = $decode_w['weather'][0]['main'];
    }
}