<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\DB;

class PostsController extends Controller
{
    public function index()
    {
        $model = new Post(DB::getCon());
        $posts = $model->All();
        echo '<pre>';
        var_dump($posts);
        echo '</pre>';
    }

    public function show($id, $request)
    {
        echo $id . '<br>';
        echo $request->get->nome . '<br>';
        echo $request->get->sexo . '<br>';
    }
}
