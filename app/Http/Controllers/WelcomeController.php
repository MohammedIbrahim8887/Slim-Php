<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeController
{
    public function index(Request $request, Response $response): Response
    {
        $data = [
            'message' => 'Hello, from welcome class',
        ];

        // Convert the data array to JSON
        $jsonResponse = json_encode($data, JSON_PRETTY_PRINT);

        // Set the response content type to JSON
        $response->getBody()->write($jsonResponse);

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200); // Optionally set the HTTP status code
    }
}
