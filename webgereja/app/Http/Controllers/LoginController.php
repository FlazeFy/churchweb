<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\PersonalAccessToken;

use App\Helpers\Validation;

use App\Models\AdminModel;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $validator = Validation::getValidateLogin($request);

        if ($validator->fails()) {
            $errors = $validator->messages();

            return redirect()->route('login')->with('failed_message', $errors);
        } else {
            $user = AdminModel::where('email', $request->email)->first();

            if (!$user) {
                return redirect()->route('login')->with('failed_message', "Email tidak terdaftar");
            } else if ($user && ($request->password != $user->password)) {
                return redirect()->route('login')->with('failed_message', 'Password salah');
            } else {
                $token = $user->createToken('login')->plainTextToken;
                $request->session()->put('token_key', $token);

                return redirect()->route('landing')->with('success_mini_message', 'Sukses masuk');
            }
        }
    }

    public function signout(Request $request)
    {
        $token = session()->get('token_key');
        $accessToken = PersonalAccessToken::findToken($token);
        $accessToken->delete();

        Session::flush();
        
        return redirect()->route('landing')->with('success_message', 'Sukses keluar'); 
    }
}
