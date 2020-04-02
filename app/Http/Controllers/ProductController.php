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
        $data = Product::all();

        return response()->json(
            [
                'message' => 'Success',
                'data' => $data
            ]
        );
    }

    public function getById($id)
    {
        $data = Product::where('id', $id)->get();

        return response()->json(
            [
                'message' => 'Success',
                'data' => $data
            ]
        );
    }

    public function put($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $product->name = $request->name ? $request->name : $request->name;
            $product->price = $request->price ? $request->price : $request->price;
            $product->quantity = $request->quantity ? $request->quantity : $request->quantity;
            $product->active = $request->active ? $request->active : $request->active;
            $product->description = $request->description ? $request->description : $request->description;

            $product->save();
            return response()->json(
                [
                    'message' => 'PUT Method with id ' . $id . ' Success',
                    'data' => $product
                ]
            );
        }
        return response()->json(
            [
                'message' => 'PUT Method with id ' . $id . ' Not Found'
            ], 400
        );
    }

    public function delete($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
           $product->delete();
            return response()->json(
                [
                    'message' => 'DELETE Method with id ' . $id . ' Success'
                ]
            ); 
        }
        return response()->json(
            [
                'message' => 'DELETE Method with id ' . $id . ' Not Found'
            ], 400
        );
    }
}
