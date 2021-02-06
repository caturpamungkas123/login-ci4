<?php

namespace App\Controllers\login;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        $dta = ['title' => 'Halaman Register'];
        return view('auth/register', $dta);
    }
}
