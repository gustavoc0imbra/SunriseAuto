<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request){
        return dd(Product::all());
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
