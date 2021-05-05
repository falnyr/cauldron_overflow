<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Hello world');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show(string $slug)
    {
        return new Response(sprintf(
            "Future page to show the question '%s'",
            $slug
        ));
    }
}
