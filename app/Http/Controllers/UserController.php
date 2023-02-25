<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('site.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerForm()
    {
        return view('site.register');
    }

    public function registerCriar(Request $request)
    {
        $register = $request->validate([
            'name'  => 'string|required',
            'email' => 'email|required',
            'password' => 'string|required'
        ]);

        $register['password'] = password_hash(strtoupper($register['password']));

        //dd($register);

       Usuario::create($register);

        return redirect()->route('site.home');;
    }

    public function cart()
    {
        $products = Product::all();
        return view('site.cart', ['products' => $products]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
