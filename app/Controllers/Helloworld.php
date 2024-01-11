<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Helloworld extends BaseController
{
    public function index()
    {
        echo "Hello World";
    }
}
