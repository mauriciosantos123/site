<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\PostModel;

class ProdutoController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = array();


        $data['listaProdutos'] = ProductsModel::get();
        // blog
        $data['listaPost'] = PostModel::limit(3)->get();
        // end blog
        // Verificar como pegar o unico id 
        $id = $request->id;
        if (empty($id)) {
            return redirect()->to('categoria');
        } else {
            $data['registro'] = ProductsModel::findOrFail($id);
        }
        return view('produto.index', $data);
        //end verificar




    }
}
