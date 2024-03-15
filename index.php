<?php
    $num = 9;

    switch ($num) {
        case ($num%2 == 0):   
            echo "Es par";
            break;
        case ($num%2 != 0):   
            echo "No es par";
            break;
        default:
            echo "Error inesperado";
            break;
    }

    $month = "octubre";

    switch ($month) {
        case (strtolower($month) == "enero"):
            echo "<br/>Verano";
            break;
        case (strtolower($month) == "febrero"):
            echo "<br/>Verano";
            break;
        case (strtolower($month) == "marzo"):
            echo "<br/>Verano";
            break;
        case (strtolower($month) == "abril"):
            echo "<br/>Verano";
            break;
        case (strtolower($month) == "mayo"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "junio"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "julio"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "agosto"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "septiembre"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "octubre"):
            echo "<br/>Invierno";
            break;
        case (strtolower($month) == "noviembre"):
            echo "<br/>Verano";
            break;
        case (strtolower($month) == "diciembre"):
            echo "<br/>Verano";
            break;
        
        default:
            echo "<br/>Mes no valido";
            break;
    }

    unset($num, $month);
?>