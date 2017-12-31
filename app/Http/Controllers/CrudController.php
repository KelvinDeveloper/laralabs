<?php

namespace App\Http\Controllers;

use App\Product;
use CodeBuilder\Http\Controllers\CrudBuilder;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function save ()
    {
        $object = new Product;
        $request = new Request([
            'name'          =>  'iPhone 6s',
            'description'   =>  'Apple smartphone',
            'price'         =>  1599.99,
            'stock'         =>  200
        ]);

        CrudBuilder::save($request, $object);
    }
}