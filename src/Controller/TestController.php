<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route(path: '/', name: 'home', methods: ['GET'])]
    public function home() {
        return $this->render('base.html.twig');
    }

}