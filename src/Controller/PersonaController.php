<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends AbstractController
{
     /**
      * @Route("/persona/saludar")
      */
   public function saludar(): Response{
        return new Response('<html><body><h2>Hola mundo!!</h2></body></html>');

    }

}