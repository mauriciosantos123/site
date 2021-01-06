<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\CategoriaModel;
use App\Models\PostModel;


class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = array();


        //Categoria
        $data['listaCategorias'] = CategoriaModel::limit(3)->get();
        //End Categoria

        //Produtos
        $produto = new ProductsModel();


        $data['listaProdutos'] = $produto->getDestaque();
        $data['listaProdutos2'] = $produto->getLancamento();
        //End Produtos
    

        //blog

        $data['listaPost'] = PostModel::limit(3)->get();

        //end blog


        return view('home.index', $data);
    }
}
