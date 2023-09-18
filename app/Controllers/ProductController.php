<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;
    public function __construct(){
        $this->product = new \App\Models\ProductModel();
    }
    public function product($product){
        echo $product;
    }
    public function hakdog(){
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }
    public function index()
    {
        //
    }
}
