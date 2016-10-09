<?php
// A MODIFER
if (empty($weather_type)){

    echo 'http://www.lostwallpapers.net/wallpaper_hd/wallpaper-sunsets%20clouds%20landscapes%20nature%20grass%20fields%20sunlight%20digital%20art%20skyscapes.jpg';

} elseif ($weather_type=='Rain') {

    echo 'https://wallpaperscraft.com/image/rainbow_lodges_glade_valley_sky_gloomy_cloudy_mountains_landscape_serenity_62948_1920x1080.jpg';
}

elseif ($weather_type=='Thunderstorm'){

    echo 'https://wallpaperscraft.com/image/lightning_category_desert_elements_cactuses_46693_1920x1200.jpg';
}

elseif ($weather_type=='Drizzle'){

    echo 'https://wallpaperscraft.com/image/rain_glare_glass_drops_92855_1920x1200.jpg';
}

elseif ($weather_type=='Snow'){

    echo 'https://wallpaperscraft.com/image/snow_winter_trees_84823_1920x1200.jpg';
}

elseif ($weather_type=='Atmosphere'){

    echo 'http://iwallpapers2.free.fr/images/Automne/Superbe_vue_en_fond_ecran.jpg';
}

elseif ($weather_type=='Clear'){

    echo 'https://wallpaperscraft.com/image/ice_lake_bottom_clear_frost_48114_1920x1200.jpg';
}

elseif ($weather_type=='Clouds'){

    echo 'https://wallpaperscraft.com/image/sky_cloudy_summer_grass_84330_1920x1080.jpg';

} else {

    echo 'https://images8.alphacoders.com/542/542175.jpg';

}

?>
