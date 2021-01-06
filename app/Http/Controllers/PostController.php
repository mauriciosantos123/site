<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $data = array();


        $data['listaPost'] = PostModel::get();


        // Verificar como pegar o unico id 
        $id = $request->id;
        if (empty($id)) {
            return redirect()->to('home');
        } else {
            $data['posts'] = PostModel::findOrFail($id);
        }
        return view('blog.index', $data);
        //end verificar}
    }
}
