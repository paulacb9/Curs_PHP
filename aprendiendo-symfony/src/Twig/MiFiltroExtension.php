<?php

namespace App\Twig;

use twig\Extension\AbstractExtension;
use twig\TwigFilter;
use twig\TwigFunction;

class MiFiltroExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('multiplicar', [$this, 'multiplicar']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('multiplicar', [$this, 'multiplicar']),
        ];
    }

    public function multiplicar($numero)
    {
        $tabla = "<h1>Tabla del $numero </h1>";
        for( $i = 1; $i <= 10; $i++){
            $tabla .= "$i x $numero = ".($i*$numero)."<br/>";
        }
        
        return $tabla;
    }
}
