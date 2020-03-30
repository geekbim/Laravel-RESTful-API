<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function post()
    {
        return response()->json(
            [
                'message' => 'POST Method Success'
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
