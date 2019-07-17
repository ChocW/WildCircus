<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PricesController extends AbstractController
{
        /**
         * @route ("prices/", name="prices")
         */

    public function index() :Response
    {
        return $this->render('prices/index.html.twig',[
            'title_jumb'=>'Prices',
            'title_page' =>'Prices',
            'current_menu' =>'Prices',
            'text_page' => ' '
        ]);
    }
}
