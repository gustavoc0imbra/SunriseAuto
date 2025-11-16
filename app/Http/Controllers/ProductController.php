<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsPostRequest;
use App\Http\Requests\ProductsPutRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function indexSlide(): array
    {
        $products = DB::select("SELECT *
                                        FROM products p
                                       WHERE p.category_id = 1");

        foreach ($products as $product) {
            $product->image_url = asset('storage\\').$product->image_url;
        }

        return $products;
    }

    public function index(): Collection
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->image_url = asset('storage\\').$product->image_url;
        }

        return $products;
    }

    public function productDetail(Request $request)
    {

        $product = Product::where('id', $request->id)->get()->first();

        $product->image_url = asset('storage\\').$product->image_url;

        return $product;
    }

    public function saveProduct(ProductsPostRequest $request)
    {
        $resp = [];
        try {

            $input = $request->validated();

            $input['id'] = 0;

            $input['name'] = strtoupper($input['name']);
            $input['description'] = strtoupper($input['description']);

            !$request->hasFile('image') ?: $input['image_url'] = $request->file('image')->store('Uploads/Products');

            $resp['success'] = Product::create($input);

        }catch (\Exception $exc){
            $resp['success'] = false;
            $resp['message'] = "Um erro occoreu ao salvar o produto";
            $resp['err']     = $exc->getMessage();
        }

        return json_encode($resp);
    }

    public function edit(ProductsPutRequest $request)
    {
        $resp = [];

        try {
            $input = $request->validated();

            $product = Product::find($request->id);

            if($request->hasFile('image')){
                Storage::delete("$product->image_url");
                $input['image_url'] = $request->file('image')->store('public/Uploads/Products');
            }

            $product->fill($input);

            $product->save() ? $resp['success'] = true : $resp['success'] = false;
        }catch (\Exception $exc){
            $resp['success'] = false;
            $resp['message'] = "Um erro occoreu ao editar o produto";
            $resp['err']     = $exc->getMessage();
        }

        return json_encode($resp);
    }

}
