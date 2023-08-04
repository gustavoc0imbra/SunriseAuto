<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function saveProduct(Request $request): string
    {
        $resp = array();
        try {

            $input = $request->validate([
                'name' => 'string|required',
                'description' => 'string|nullable',
                'image' => 'file|nullable',
                'cost_price' => 'numeric|required',
                'selling_price' => 'numeric|nullable'
            ]);

            $input['id'] = 0;

            $request->hasFile('image') ? $input['image_url'] = $request->file('image')->store('./Uploads/Products') : null;

            $resp['success'] = Product::create($input);

        }catch (\Exception $exc){
            $resp['success'] = false;
            $resp['message'] = "Um erro occoreu ao salvar o produto";
            $resp['err'] = $exc->getMessage();
        }

        return json_encode($resp);
    }

    public function edit(Request $request)
    {
        $resp = array();

        try {

            Product::find($request['id']);

            $input = $request->validate([
               'name'          => 'string|required',
               'description'   => 'string|nullable',
               'imagem'        => 'file|nullable',
               'cost_price'    => 'numeric|required',
               'selling_price' => 'numeric|nullable'
            ]);

        }catch (\Exception $exc){
            $resp['success'] = false;
            $resp['message'] = "Um erro ocorreu ao editar o produto";
            $resp['err'] = $exc->getMessage();
        }

        return json_encode($resp);
    }

}
