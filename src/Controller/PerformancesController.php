<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PerformancesController extends AbstractController
{
    /**
     * @Route("/performances", name="performances")
     */
    public function index()
    {
        return $this->render('performances/index.html.twig', [
            'title_jumb'=>'Performances',
            'title_page' =>'Performances',
            'current_menu' =>'Performances',
            'text_page' => ' '
        ]);
    }
}
