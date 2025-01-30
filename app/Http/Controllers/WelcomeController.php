<?php

namespace App\Http\Controllers;


class WelcomeController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write('Welcome Controller Worked!');

        return $response;

    }
    public function show($response, $name, $id)
    {
        $response->getBody()->write("Welcome $name, your id is $id");

        return $response;
    }

}