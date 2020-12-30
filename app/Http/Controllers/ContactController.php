<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request) {
        $data = array();
        return view('contact.index', $data);
    }
}
