<?php

function get_country_name_switch($country){
    //usando switch case
    $name = "";
    switch($country){
        case "MX":
            $name = "Mexico";
            break;
        case "COL":
            $name = "Colombia";
            break;
        default:
            echo "No encontrado";
            break;
        }
        return $name;
}
echo get_country_name_switch("COL")."<br>";

function get_country_name_match($country){
    // usando match
    return match($country){
        "MX"=>"Mexico",
        "COL"=>"Colombia",
        default=>"Pais no encontrado",
    };
}
echo get_country_name_match("MX");

?>