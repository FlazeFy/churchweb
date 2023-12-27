<?php
namespace App\Helpers;

class Converter
{
    public static function getCleanKamus($val){
        $res = ucwords(str_replace("_"," ",$val));

        return $res;
    }
}