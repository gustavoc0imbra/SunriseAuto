<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::select('SELECT Name, CONCAT("R$", " ", Price) as Price FROM products');
        return view('site.home', ['products' => $products]);
    }

    public function create()
    {
        return view('site.addProduto');
    }

    public function list()
    {
        $products = Product::all();
        return view('site.list', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'Name'      => 'string|required',
            'Price'     => 'numeric|required',
            'Descricao' => 'string|nullable',
            'Image'     => 'image|nullable'
        ]);

        $input['Image'] = $input['Image']->store('Images');

        $create = Product::create($input);

        if($create){
            return redirect()->route('site.home');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function indexApi(){

       $products =  Product::all();

        return $products->toJson();
    }

    public function createProductApi(Request $request){

        $resp = array();

        $input = $request->validate([
            'Name'      => 'string|required',
            'Price'     => 'numeric|required',
            'Descricao' => 'string|nullable',
            'Image'     => 'image|nullable'
        ]);

        $input['Image'] = $input['Image']->store('Images');

        $create = Product::create($input);

        $create ? $resp['msg'] = null : $resp['msg'] = "DEU RUIM :(";


        return collect($resp);
    }
}
