<?php
namespace App\Helpers;

class Generator
{
    public static function getCleanTitle($val){ 
        $res = ucwords(str_replace("_"," ",$val));

        return $res;
    }
}