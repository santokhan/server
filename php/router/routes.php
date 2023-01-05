<?php

class Routes{
    public static function get_file(string $path){
        // Don't forgot to add . before HTML
        $file_path = "/../../library".$path.".html";
        require_once __DIR__.$file_path;
    }
    public static  function get(string $path, $callBack){
        // Get path
        $uri = $_SERVER["REQUEST_URI"];
        
        if ($uri === $path) {
            Routes::get_file($path);
            $callBack();
            return true;
        }else{
            // echo "Enter a valid route";
            return false;
        }
    }
}


Routes::get($_SERVER["REQUEST_URI"],function(){});

// Routes::get("/components/accordion/default", function (){
//     echo "Default";
// });

// Routes::get("/components/accordion/flush", function (){
//     echo "Default";
// });

