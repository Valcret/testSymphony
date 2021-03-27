<?php

namespace App\Controller; 
// indique a symfony que la classe se trouve 
// dans src/Controller

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Produits;

class ProductListController extends AbstractController
{
    public function listProductInfos()
    {
        $database = $this->getDoctrine()->getManager();
        
        //  SELECT * FROM commandes
        $products = $database->getRepository(Produits::class)->findAll();
        
        //var_dump($orders);
        //die();
        return $this->render('productList.html.twig', ['products' => $products]);
    }
    
}