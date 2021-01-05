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



        $nomes = array();
        $nomes[] = "products.product_id as product_id";
        $nomes[] = "products.name as products_name";
        $nomes[] = "products.desc as products_desc";
        $nomes[] = "products.img_1 as products_img_1";
        $nomes[] = "products.img_2 as products_img_2";
        $nomes[] = "products.img_3 as products_img_3";
        $nomes[] = "products.img_destaque as products_img_destaque";
        $nomes[] = "products.thumbnail as products_thumbnail";
        $nomes[] = "products.price as products_price";
        $nomes[] = "products.sale as products_sale";
        $nomes[] = "products.status as products_status";
        $nomes[] = "products.categoria as categoria_id";
        $nomes[] = "products.lancamento as products_lancamento";
        $nomes[] = "categoria_models.name as categoria_name";


        $data['listaProdutos'] = ProductsModel::select($nomes)->leftJoin('categoria_models', 'categoria_models.categoria_id', '=', 'products.categoria')->where('destaque', '1')->get();
        //End Produtos
        $data['listaProdutos2'] = ProductsModel::select($nomes)->leftJoin('categoria_models', 'categoria_models.categoria_id', '=', 'products.categoria')->where('destaque', '0')->get();

        //blog

        $data['listaPost'] = PostModel::limit(3)->get();

        //end blog


        return view('home.index', $data);
    }
}
