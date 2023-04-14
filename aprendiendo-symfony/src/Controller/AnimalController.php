<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use Doctrine\Persistence\ManagerRegistry;

class AnimalController extends AbstractController
{
    public function index(ManagerRegistry $registry): Response
    {
        $animal_repo = $registry->getRepository(Animal::class);
        $animales = $animal_repo->findAll();

        // Sacar todos con condición y orden descendiente
        $animal = $animal_repo->findBy([
            'raza' => 'Africana'
        ], [
            'id' => 'DESC'
        ]);

        var_dump($animal);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    public function save(ManagerRegistry $registry){
        // Cargo el EM
        $entityManeger = $registry->getManager();

        // Creo el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('Verde');
        $animal->setRaza('Africana');

        // Guardar objeto en doctrine
        $entityManeger->persist($animal);

        // Volcar / guardar datos en la tabla
        $entityManeger->flush();

        //Devolver
        return new Response('El animal guardado tiene el id: '.$animal->getId());
    }
    /*
    public function animal($id, ManagerRegistry $registry){
        // Cargar repositorio
        $animal_repo = $registry->getRepository(Animal::class);

        // Consulta
        $animal = $animal_repo->find($id);
        

        // Comprovar si el resultado es correcto
        if(!$animal){
            $message = 'El animal no existe';
        }else{
            $message = 'Tu animal elegido es: '
                        .$animal->getTipo()
                        .' ('.$animal->getColor().') - '
                        .$animal->getRaza();
        }

        return new Response($message);
    }*/

    public function animal(Animal $animal)
    {
        // Comprovar si el resultado es correcto
        if (!$animal) {
            $message = 'El animal no existe';
        } else {
            $message = 'Tu animal elegido es: '
                       .$animal->getTipo()
                       .' ('.$animal->getColor().') - '
                       .$animal->getRaza();
        }
        var_dump($animal);

        return new Response($message);
    }
}
