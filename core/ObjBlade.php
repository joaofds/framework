<?php

namespace Core;

use Jenssegers\Blade\Blade;

/**
 * Classe que inicia um Objeto de Blade para guardar diretório
 * de Views e Cache.
 */

class ObjBlade extends Blade
{
    private $blade;

    public function __construct()
    {
        $blade = new Blade(
            '../resources/views',
            '../temp/cache'
        );

        $this->blade = $blade;
    }
}
