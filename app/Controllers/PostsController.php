<?php

namespace App\Controllers;

use Core\Controller;

class PostsController extends Controller
{
    public function index()
    {
        echo "Post Controller";
    }

    public function show($id, $request)
    {
        echo $id . '<br>';
        echo $request->get->nome . '<br>';
        echo $request->get->idade . '<br>';
    }
}
