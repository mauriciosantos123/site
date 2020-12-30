<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller {

    public function index(Request $request) {
        $data = array();
        return view('categoria.index', $data);
    }

}
