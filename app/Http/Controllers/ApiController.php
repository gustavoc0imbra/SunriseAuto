<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request){

        if($request['query']){
            $products = Product::find($request['query']);
        }

        $products = Product::all();

         return $products;
    }

    public function verifyCEP(Request $request){

        $cep = $request['cep'];

        try {
            $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json');

            if($response->successful()){
                return dd($response->body());
            }else{
                return dd($response->status());
            }
        } catch (Exception $exc) {
            return $exc->getMessage();
        }

    }
}
