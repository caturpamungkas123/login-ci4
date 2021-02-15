<?php

namespace App\Controllers\admin;

use \App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Dashboard Admin',
        ];
        return view('admin/index', $dta);
    }

    public function users()
    {
        $users = new \Myth\Auth\Models\UserModel();
        $dta = [
            'title' => 'Dashboard Admin',
            'user' => $users->findAll()
        ];
        return view('admin/users', $dta);
    }
}
