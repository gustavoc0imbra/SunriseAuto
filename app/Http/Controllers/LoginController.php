<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(LoginPostRequest $request){
        $input = $request->validated();

        $input['password'] = Hash::make("$request->password");

        return User::create($input);
    }

    public function login(Request $request){
            $input = $request->validate([
                'email' => 'email|required',
                'password' => 'string|required'
            ]);

            if(Auth::attempt($input)){

                $user = User::where('email', "{$input['email']}")->first();
                $token = $request->User()->createToken("api".$user->email)->plainTextToken;
                $resp = array(
                    'token' => $token
                );

                return json_encode($resp);
            }
            return "erro senha ou email invalidos";
    }

}
