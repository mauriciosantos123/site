<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;
use App\Models\ProductsModel;

class CategoriaController extends Controller {

    public function index(Request $request) {
        $data = array();

        $data['listaCategorias']= CategoriaModel::get();

        //produtos
        $id= $request->id;
        if(empty($id)){
            $data['listaProdutos'] = ProductsModel::get();
        }else {
            $data['listaProdutos'] = ProductsModel::where('categoria',$id)->get();
        }
        //fim produto
        
        




        return view('categoria.index', $data);

    }

}
