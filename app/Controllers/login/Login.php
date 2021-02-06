<?php

namespace App\Controllers\login;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $dta = ['title' => 'Halaman Login'];
        return view('auth/index', $dta);
    }
}
