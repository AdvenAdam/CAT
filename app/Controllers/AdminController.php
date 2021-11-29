<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
        return view("admin/dashboard");
    }
}
