<?php

namespace App\Controller; 
// indique a symfony que la classe se trouve 
// dans src/Controller

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\commandes;

class OrderController extends AbstractController
{
    public function test()
    {
        $database = $this->getDoctrine()->getManager();
        
        //  SELECT * FROM commandes
        $orders = $database->getRepository(Commandes::class)->findAll();
        
        //var_dump($orders);
        //die();
    }
    
}