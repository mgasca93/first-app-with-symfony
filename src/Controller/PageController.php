<?php

namespace App\Controller;

class PageController
{
    #[Route('/')]
    public function home()
    {
        return "Hello wordl!";
    }
}