<?php
include "Responses.php";

class CheckIntent extends Responses {
    
    static function InputUnknown($update){
        if($update["queryResult"]["outputContexts"][0]["parameters"]["no-match"] >= 3){
        
        }else{
        $response = CheckIntent::defaultResponses();
        return Responses::Text($response[rand(0,3)]);    
        }
    }
    
    static function defaultResponses(){
        return [
            'Ups, no he entendido a que te refieres.',
            '¿Podrías repetirlo, por favor?',
            '¿Disculpa?',
            '¿Cómo?'
            ];
    }
    
    static function getResponse($update){
        
        switch($update["queryResult"]["action"]){
            case "input.unknown":
                return CheckIntent::InputUnknown($update);
            break;
            
        }
    }
}
