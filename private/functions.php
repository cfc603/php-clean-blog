<?php

    function url_for($path){
        if($path[0] != "/"){
            $path = "/" . $path;
        }

        return WWW_ROOT . $path;
    }


    function u($string="") {
        return urlencode($string);
    }


    function h($string="") {
        return htmlspecialchars($string);
    }


?>