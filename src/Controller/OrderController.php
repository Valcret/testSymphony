<?php

namespace App\Controller; 
// indique a symfony que la classe se trouve 
// dans src/Controller

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Commandes;

class OrderController extends AbstractController
{
    public function test()
    {
        $database = $this->getDoctrine()->getManager();
        
        //  SELECT * FROM commandes
        $orders = $database->getRepository(Commandes::class)->findAll();
        
        return $this->render('orders.html.twig' , [ 'orders' => $orders]);
    }
    
}