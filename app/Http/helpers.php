<?php

use League\CommonMark\Delimiter\Delimiter;

function makeImagefromname($name){
    $userImage = "";
    $shortName = "";

    $names = explode(" ",$name);
    
    foreach($names as $w){
        $shortName .= $w[0];
    }

    $userImage = '<div class="name-image bg-primary">'.$shortName.'</div>';
    return $userImage;
}