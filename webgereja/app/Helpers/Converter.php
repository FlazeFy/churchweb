<?php

namespace App\Helpers;
use App\Models\KamusModel;

class Converter
{
    public static function getCleanKamus($val){
        $res = ucwords(str_replace("_"," ",$val));

        return $res;
    }

    public static function getSlugKamus($val){
        $res = strtolower(str_replace("_"," ", $val));

        $check = KamusModel::select('kamus_slug')
            ->where('kamus_slug', $res)
            ->limit(1)
            ->get();
        
        if(count($check) > 0){
            $res = $res."_".date('mdhis'); 
        }

        return $res;
    }
}