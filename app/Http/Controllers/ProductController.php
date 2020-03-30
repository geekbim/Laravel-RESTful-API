<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function post(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->description = $request->description;

        $product->save();

        return response()->json(
            [
                'message' => 'Success',
                'data' => $product
            ]
        );
    }

    public function get()
    {
        return response()->json(
            [
                'message' => 'GET Method Success'
            ]
        );
    }

    public function put($id)
    {
        return response()->json(
            [
                'message' => 'PUT Method Success ' . $id
            ]
        );
    }

    public function delete($id)
    {
        return response()->json(
            [
                'message' => 'DELETE Method Success ' . $id
            ]
        );
    }
}
