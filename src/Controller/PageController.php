<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PageController
{
    #[Route('/')]
    public function home( Request $request ) : Response
    {
        $search = $request->get('search');
        return new Response("Hello wordl!", $search);
    }
}