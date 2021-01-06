<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data = array();  

        //produtos;
        $id = $request->id;
        $data['registro'] = ProductsModel::get();
        // print_r($data);
        // die();

        //fim produtos
        return view('order.index', $data);
    }


    public function shipping(Request $request)
    {
        $data = array();
        return view('order.shipping', $data);
    }



    public function payment(Request $request)
    {
        $data = array();
        return view('order.payment', $data);
    }


    public function completed(Request $request)
    {
        $data = array();
        return view('order.completed', $data);
    }
}
