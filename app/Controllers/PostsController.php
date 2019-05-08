<?php

namespace App\Controllers;

use Core\Controller;

class PostsController extends Controller
{
    public function index()
    {
        echo "Posts Page";
    }

    public function show($id, $request)
    {
        echo $id . '<br>';
        echo $request->get->nome . '<br>';
        echo $request->get->idade . '<br>';
    }
}
