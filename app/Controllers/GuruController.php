<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GuruController extends BaseController
{
    public function __construct()
    {
        if (session()->get('level') != "guru") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("guru/dashboard");
    }
}
