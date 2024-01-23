<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomImageController extends AbstractController
{
    #[Route('/', name: 'app_random_image')]
    public function index(): Response
    {
        $images = [];

        for ($i = 0; $i < 9; $i++) {
            $images[] = 'https://picsum.photos/300/200?random=' . $i;
        }

        return $this->render('random_image/index.html.twig', [
            'images' => $images,
        ]);
    }
}
