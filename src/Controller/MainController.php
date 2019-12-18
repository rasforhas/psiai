<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);

    }

    /**
     * @Route("/logging/log")
     */
    public function logging()
    {
        return $this->render('main/logging.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
