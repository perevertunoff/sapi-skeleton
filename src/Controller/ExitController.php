<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="exit")
 */
class ExitController
{
    public function __invoke()
    {
        exit();
    }
}
