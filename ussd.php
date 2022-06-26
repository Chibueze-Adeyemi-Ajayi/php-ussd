<?php 

if (isset($_POST["sessionId"])) {
        
    $sessionId   = $_POST["sessionId"];  
    $serviceCode = $_POST["serviceCode"];  
    $text = $_POST["text"];

    if ( $text == "" ) {
        $response  = "CON Hi welcome, I can help you with Event Reservation \n";
        $response .= "1. Enter 1 to continue";
    }

} else echo "Php App";

?>