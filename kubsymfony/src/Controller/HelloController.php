<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function hello(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'<img src="/resources/flower.png"></body></html>'
        );
    }
}
