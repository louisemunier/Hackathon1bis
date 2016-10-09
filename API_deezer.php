<?php
    if (isset($type_temps)) {
        $requete_deezer = "https://api.deezer.com/search?q='.$type_temps.'";
        $data_deezer = $file_get_contents($requete_deezer);
        $decode_d = json_decode($data_deezer, true);
        $id_deezer = $decode_d['data'][rand(0, 10)];

        echo '<iframe class="embed-responsive-item" scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=tracks&id='.$id_deezer['id'].'&app_id=1" 
        width="700" height="350"></iframe>';
    } else {
        return 'error';
    }

?>