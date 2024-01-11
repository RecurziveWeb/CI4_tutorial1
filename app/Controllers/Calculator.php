<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Calculator extends BaseController
{
    public function index()
    {
        
    }

    public function add($num1, $num2)
    {
    	echo $num1 + $num2;
    }

}
