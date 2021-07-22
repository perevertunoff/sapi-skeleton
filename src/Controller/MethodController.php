<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AccessKey;
use App\Service\Method;

/**
 * @Route("/{access_key}/{method_name}", name="method", methods={"GET", "POST"})
 */
class MethodController extends AbstractController
{
    public function __invoke($method_name, AccessKey $accessKey, Method $method)
    {
        if ($accessKey->isNotAllowed()) {
            return $this->json(['error' => 'Access not allowed']);
        }

        if (!method_exists($method, $method_name)) {
            return $this->json(['error' => 'Method not found']);
        }

        return $this->json($method->$method_name());
    }
}
