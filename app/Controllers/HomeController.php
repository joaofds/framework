<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $title = "..::uFramework!::..";
        $this->view('pages.home', [
            'title' => $title
        ]);
    }
}
