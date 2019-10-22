<?php

namespace App\Controllers;

use Core\Container;
use Core\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $model = Container::getModel('Post');
        $posts = $model->All();
        $title = "Posts";
        
        $this->view('pages.posts',[
            'posts' => $posts,
            'title' => $title
        ]);
    }

    public function show($id, $request)
    {
        echo $id . '<br>';
        echo $request->get->nome . '<br>';
        echo $request->get->sexo . '<br>';
    }
}
