<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Models\UsuarioModel;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    private function process_form(Request $request)
    {


        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['birthdate'] = $request->birthdate;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;


        return $data;
    }

    public function index(Request $request)
    {
        $data = array();
        
        return view('acount.login', $data);
    }
    // ----------------Parte de login 
    public function login(Request $request)
    {

        //$data['message']= $request->session()->get('message');
        //        return view('login.index',$data);


        $data['message']='';
      
        if (!empty($request->email)) {
            $res = UsuarioModel::where('email', $request->email)->get()->first();
            ///    $res = $res[0];
            //   print_r($res);
            // die();

            //echo($res);

            //die();
            if (isset($res)) {
                $teste = strlen($res->email);                       
                if (($res->password == $request->password) && (strlen($teste) > 0) ) {
                    $request->session()->put('id',  $res->id);
                    $request->session()->put('auth',  1);
                    return redirect()->to('home');
                } else {
                    $request->session()->put('auth',  0);
                  
                    $data['message']=' senha incorreta ';

                    return view('acount.login',$data);
                }
            
            } else {
                $request->session()->put('auth',  0);

                $data['message']=' verificar email e senha ';

                return view('acount.login',$data);
            }
        } else {
            return view('acount.login');
        }
    }

    
    // ----------------Fim Parte de login 
    //      Começo SignUp------------------------------------------


    public function signup()
    {
        $data = array();

        return view('acount.singUp', $data);
    }


    public function store(Request $request)
    {
        UsuarioModel::create($this->process_form($request));

        $request->session()->flash('message', ' cadatrado com sucesso');

        return view('acount.singUp');
    }

    // Fim SignUp-----------------------------------------------------
    public function logout()
    {
        return view('login.index');
    }
    public function forgot()
    {
        return view('acount.forgot');
    }
    public function orders()
    {
        return view('acount.orders');
    }
    public function wishlist()
    {
        return view('acount.wishlist');
    }
    public function wallet()
    {
        return view('acount.wallet');
    }


    public function address()
    {
        return view('acount.address');
    }
}
