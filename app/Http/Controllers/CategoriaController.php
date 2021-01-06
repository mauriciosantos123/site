<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;
use App\Models\ProductsModel;

class CategoriaController extends Controller
{

    public function index(Request $request)
    {
    if ($request->session()->get('auth')){ 

        $data = array();
        $data['listaCategorias'] = CategoriaModel::get();

        //produtos
        $id = $request->id;
        if (empty($id)) {
            $data['listaProdutos'] = ProductsModel::get();
        } else {
            $data['listaProdutos'] = ProductsModel::where('categoria', $id)->get();
        }
        //fim produto

    }else{
        $request->session()->put('auth',  0);
        $request->session()->flash('message', 'Voce não tem permissão ');

        return redirect()->to('account');
      }




        return view('categoria.index', $data);
    }
}
