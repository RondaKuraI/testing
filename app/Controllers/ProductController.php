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
    public function delete($id){
        $this->product->delete($id);
        return redirect()->to('/product');
    }
    public function edit($id){
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);
    }
    public function save(){
        $data = [
            'ID' => $this->request->getVar('ID'),
            'UPC' => $this->request->getVar('UPC'),
            'Name' => $this->request->getVar('Name'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Price' => $this->request->getVar('Price'),
            'Expiry_Date' => $this->request->getVar('Expiry_Date'),
            'Created_At' => $this->request->getVar('Created_At'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');
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
