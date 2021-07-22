<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use App\Service\Profile;

class Method
{
    private $requestStack;
    private $profile;

    public function __construct(RequestStack $requestStack, Profile $profile)
    {
        $this->requestStack = $requestStack;
        $this->profile = $profile;
    }

    public function hiWorld()
    {
        return 'Hi World!';
    }
}
