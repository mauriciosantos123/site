<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request) {
        $data = array();
        return view('order.index', $data);
    }
    public function shipping(Request $request) {
        $data = array();
        return view('order.shipping', $data);
    }
    public function payment(Request $request) {
        $data = array();
        return view('order.payment', $data);
    }
    public function completed(Request $request) {
        $data = array();
        return view('order.completed', $data);
    }
}
