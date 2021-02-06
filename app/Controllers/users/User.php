<?php

namespace App\Controllers\users;

use \App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Halman Users'
        ];
        return view('users/index', $dta);
    }
}
