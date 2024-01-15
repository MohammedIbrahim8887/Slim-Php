<?php

// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use App\Http\Models\Student; // Import the Student model
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class WelcomeController
{
    public function index(Request $request, Response $response): Response
    {
        // Fetch all students using the Eloquent model
        $students = Student::all();

        // Convert the students collection to an array
        $data = $students->toArray();

        // Convert the data array to JSON
        $jsonResponse = json_encode($data, JSON_PRETTY_PRINT);

        // Set the response content type to JSON
        $response->getBody()->write($jsonResponse);

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200); // Optionally set the HTTP status code
    }
}
