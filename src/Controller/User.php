<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class User
{
    public function index()
    {

        return new Response(
            'hello user'
        );
    }
}