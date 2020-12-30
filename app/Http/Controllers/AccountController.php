<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request) {
        $data = array();
        return view('acount.index', $data);
    }

    public function login(Request $request) {
        return view('acount.login');
    }

    public function signup() {
        return view('acount.singUp');
    }
    public function logout() {
        return view('login.index');
    }
    public function forgot() {
        return view('acount.forgot');
    }
    public function orders() {
        return view('acount.orders');
    }
    public function wishlist() {
        return view('acount.wishlist');
    }
    public function wallet() {
        return view('acount.wallet');
    }
    public function address() {
        return view('acount.address');
    }

}
