<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
                return redirect()->route('login')->with('failed_message', "Email doesn't exist");
            } else if ($user && ($request->password != $user->password)) {
                return redirect()->route('login')->with('failed_message', 'Wrong password');
            } else {
                $token = $user->createToken('login')->plainTextToken;

                return redirect()->route('landing')->with('success_mini_message', 'Login success');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout success'
        ], Response::HTTP_OK);
    }
}
