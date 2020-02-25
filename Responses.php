<?php

class Responses{
    
    static function Text($text){
      return [
       "fulfillmentText"=>$text
       ];  
    }
    
    static function Card($title,$text,$img,$button,$link){
        echo '{
            "fulfillmentMessages": [
        {
          "card": {
            "title": "'.$title.'",
            "subtitle": "'.$text.'",
            "imageUri": "'.$img.'",
            "buttons": [
              {
                "text": "'.$button.'",
                "postback": "'.$link.'"
              }
            ]
          }
        }
      ]
        }';
    }
    
    static function Source($url){
        return [
       "source"=>$url
       ];
    }
    
}