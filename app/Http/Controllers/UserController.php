<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(UserPostRequest $request): User
    {
        $input = $request->validated();

        $input['password'] = Hash::make("$request->password");
        return User::create($input);
    }
}
