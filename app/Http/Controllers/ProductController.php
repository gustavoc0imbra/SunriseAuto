<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function saveProduct(Request $request){
        $resp = array();
        try {

            $input = $request->validate([
                'name' => 'string|required|size:300',
                'description' => 'string|nullable|size:500',
                'image' => 'file|nullable',
                'cost_price' => 'numeric|required',
                'selling_price' => 'numeric|nullable'
            ]);

            $input['image_url'] = $request->file('image')->store('../Uploads/Products');

            $resp['success'] = Product::save($input);

        }catch (\Exception $exc){
            $resp['success'] = false;
            $resp['message'] = "Um erro occoreu ao salvar o produto";
            $resp['err'] = $exc->getTraceAsString();
        }

        return json_encode($resp);
    }
}
