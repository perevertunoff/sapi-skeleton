<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test", name="test", methods={"GET", "POST"})
 */
class TestController extends AbstractController
{
    public function __invoke()
    {
        return $this->json('test');
    }
}
