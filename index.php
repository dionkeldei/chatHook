<?php
include "CheckIntent.php";

function processMessage($update) {
    sendMessage(CheckIntent::getResponse($update));
}
 
function sendMessage($parameters) {
    if($parameters != null){
       print_r(json_encode($parameters)); 
    }
   
}
 
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["queryResult"]["action"])) {
    processMessage($update);
}