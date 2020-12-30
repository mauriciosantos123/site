<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function index(Request $request) {
        $data = array();
        return view('produto.index', $data);
    }
}
