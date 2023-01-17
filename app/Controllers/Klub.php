<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Klub extends BaseController
{
    public function index()
    {
        // Menampilkan dashboard Klub/SSB
        return view('Klub/dashboard-klub');
    }
}