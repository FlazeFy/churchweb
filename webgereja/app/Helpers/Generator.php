<?php
namespace App\Helpers;

use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Auth;

class Generator
{
    public static function getCleanTitle($val){ 
        $res = ucwords(str_replace("_"," ",$val));

        return $res;
    }

    public static function getUserId(){
        $token = session()->get("token_key");
        $accessToken = PersonalAccessToken::findToken($token);

        if ($accessToken) {
            if($accessToken->tokenable){
                Auth::login($accessToken->tokenable);
                $user = Auth::user();
                
                $res = $user->id;
                return $res;
            } else {
                return redirect("/")->with('failed_message','This account is no longer exist');
            }
        } else {
            return null;
        }
    }
}