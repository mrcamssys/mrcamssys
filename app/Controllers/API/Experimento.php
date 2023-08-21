<?php

    namespace App\Controllers\API;
    use CodeIgniter\RESTful\ResourceController;

class Experimento extends ResourceController
{
    public function index()
    {
        //return view('welcome_message');
        echo "<h1>Clase Experimento</h1>";
    }
}
