<?php

namespace App\Controllers;

use Core\ObjBlade;

class TesteController
{
    public function index()
    {
        $blade = new ObjBlade;
        
        $title = "..::uFramework::..";
        $path = __DIR__;

        // Mostrando View teste.blade.php e enviando parâmetros.
        echo $blade->make('teste', [
            'name'  =>  'João Silva',
            'title' =>  $title,
            'path'  =>  $path
        ]);
    }
}