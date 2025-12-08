<?php

    if ( !function_exists('upper')){
        function upper($value){
            return Text\UserFormatText::upperText($value);
        }
    }

    if(!function_exists('lower')){
        function lower($value){
            return Text\UserFormatText::lowerText($value);
        }
    }


?>