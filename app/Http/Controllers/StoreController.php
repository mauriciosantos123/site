<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request) {
        $data = array();
        return view('store.index', $data);
    }
}
