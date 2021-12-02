<?php

$jsonhour =file_get_contents('bdd/hour.json', "r");
$hour = json_decode($jsonhour, true);

$img = 0;

foreach ($hour as $key => $item){

    foreach ($item as $key => $val){
        $img ++;

        if ($val["Continent"] == "Afrique") {
        echo ('<div class="w3-container">
        <div class="w3-card-4 w3-dark-grey" style="width:50%">
      
          <div class="w3-container w3-center">
            <h3>'.$val["Pays"].'</h3>
            <img class="tailleimg img'.$img.'" src="./images/'.$val["Code_Pays"].'.png" alt="Avatar" style="width:80%">
            <h5>'.$val["Horaire"].'</h5>
      
          </div>
      
        </div>
      </div>');
  
        }
    }
}
?>