<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
               'controller_name' => 'HomeController',
            'hello' => 'Hola Mundo con Symfony 5'
        ]);
    }

    public function animales($nombre, $apellidos){
        $title = 'Bienvenido a la pagina de Animales';
        $animales = array('perro', 'gato', 'paloma', 'rata');
        $aves = array(
            'tipo' => 'paloma', 
            'color' => 'gris', 
            'edad' => 4, 
            'raza' => 'colillano'
        );

        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'aves' => $aves
        ]);
    }
    
    public function redirigir(){
        // return $this->redirectToRoute('animales', [
        //     'nombre' => 'Elisa',
        //     'apellido' => 'Vieira Cordon'
        // ]);
        return $this->redirect('https://oceviagem.com');
    }
}
