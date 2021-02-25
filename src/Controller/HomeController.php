<?php

namespace App\Controller; 
// indique a symfony que la classe se trouve 
// dans src/Controller

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function display()
    {

        return $this->render('home.html.twig');

    }
    
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}