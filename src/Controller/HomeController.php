<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
        /**
         * @route ("/", name="home")
         */

    public function index() :Response
    {
        return $this->render('home/index.html.twig',[
            'title_jumb'=>'Wild circus',
            'title_page' =>'Wild circus',
            'current_menu' =>'Home',
            'text_page' => 'Wild circus is happy to open its doors to introduce you to its incredible artists. Wild circus has held shows worldwide since 1945.'
        ]);
    }
}
