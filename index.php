<?php
    $num = 0;

    if($num > 0){
        echo "Es positivo";
    } elseif ($num < 0) {
        echo "Es negativo";
    } else {
        echo "Es cero";
    }

    $month = "octubre";

    switch (strtolower($month)) {
        case "enero":
        case "febrero":
        case "marzo":
        case "abril":
        case "noviembre":
        case "diciembre":
            echo "<br/>Verano";
            break;
        case "mayo":
        case "junio":
        case "julio":
        case "agosto":
        case "septiembre":
        case "octubre":
            echo "<br/>Invierno";
            break;
        default:
            echo "<br/>Mes no valido";
            break;
    }

    unset($num, $month);
?>