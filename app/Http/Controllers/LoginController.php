<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
            $input = $request->validate([
                'email' => 'email|required',
                'password' => 'string|required'
            ]);

            if(Auth::attempt($input)){

                $user = User::where('email', "{$input['email']}")->first();
                $token = $request->User()->createToken("api".$user->email)->plainTextToken;
                $user->api_key = $token;
                $user->save();

                $resp = array(
                    '_token' => $token
                );

                return json_encode($resp);
            }
            return "Erro senha ou email inválidos";
    }

}
