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
    
    public function persons()
    {
        $json = '{"id_produit":"5","nom":"Tablette graphique Wacom Cintiq 16 13","marque":"WACOM","reference":"Cintiq","etiquettes":"tablette graphique, wacom, 13","prix":"399.99","ecoparticipation":"0.30","statut":"En boutique","description_principale":"Lib\u00e9rez votre talent avec Wacom Cintiq\r\n\r\nWacom Cintiq 16 repr\u00e9sente une nouvelle cat\u00e9gorie d\u2019\u00e9cran de cr\u00e9ation \u00e0 stylet avec ses fonctionnalit\u00e9s optimis\u00e9es pour les jeunes artistes. Votre travail prend une autre dimension gr\u00e2ce \u00e0 la fid\u00e9lit\u00e9 des couleurs et \u00e0 la nettet\u00e9 de la haute d\u00e9finition associ\u00e9es \u00e0 l\u2019extr\u00eame r\u00e9activit\u00e9 du stylet Wacom Pro Pen 2. ","titre_1":"titre1","image_1":"assets\/img\/","description_1":"Desc1","titre_2":"Cr\u00e9er directement sur l\u2019\u00e9cran","image_2":"assets\/img\/","description_2":"Wacom Cintiq associe le stylet et l\u2019\u00e9cran pour une exp\u00e9rience fluide et totalement naturelle.\r\n\r\nLe stylet Wacom Pro Pen 2 poss\u00e8de 8 192 niveaux de sensibilit\u00e9 \u00e0 la pression et s\u2019active avec un minimum de force de sorte qu\u2019il d\u00e9tecte m\u00eame les traits de crayon les plus l\u00e9gers. Il offre une pr\u00e9cision et une ma\u00eetrise incroyables, r\u00e9agissant \u00e0 l\u2019inclinaison de la main et r\u00e9pondant pr\u00e9cis\u00e9ment et imm\u00e9diatement \u00e0 chaque mouvement. ","titre_3":"Un stylet pour vous surpasser","image_3":"assets\/img\/","description_3":" Le stylet Wacom Pro Pen 2 ressemble \u00e0 un stylo traditionnel. Intuitif, il vous permet de donner vie imm\u00e9diatement \u00e0 vos id\u00e9es sans avoir besoin d\u2019apprendre de nouvelles techniques.\r\n\r\n\u2022 Le stylet Wacom Pro Pen 2 offre pr\u00e9cision et ma\u00eetrise, poss\u00e8de 8 192 niveaux de sensibilit\u00e9 \u00e0 la pression, s\u2019active avec un minimum de force et d\u00e9tecte parfaitement l\u2019inclinaison.\r\n\r\n\u2022 Gr\u00e2ce \u00e0 la technologie de r\u00e9sonance \u00e9lectromagn\u00e9tique (EMR), ne rechargez jamais votre stylet : il tire toute l\u2019\u00e9nergie dont il a besoin de l\u2019\u00e9cran Wacom Cintiq.\r\n\r\n\u2022 Sa prise en main est excellente gr\u00e2ce \u00e0 la bonne r\u00e9partition du poids, \u00e0 la zone de pr\u00e9hension en caoutchouc et \u00e0 l\u2019accessibilit\u00e9 des deux boutons lat\u00e9raux. ","id_rayon":"12","rayon":"Tablette graphique","id_boutique":"1","boutique":"P\u00e9riph\u00e9riques"}';
    
        $product = json_decode($json);
    
    
        $persons = ['Amaury' , 'Flavia' , 'MohammedE'];
        $school = '3WA';
    
        return $this->render('exo1main.html.twig', 
        [
            'ecole' => $school,
            'persons' => $persons,
            'product' => $product
        ]);
    }
    
}