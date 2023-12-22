<?php
    
    function dd($value)
    {
        echo "<pre>", print_r($value, true), "</pre>";
        die();
    }

    function urlIs($url)
    {
        return $_SERVER['REQUEST_URI'] == $url;
    }
