<?php

namespace App\Controllers\admin;

use \App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        $dta = [
            'title' => 'Dashboard Admin'
        ];
        return view('admin/index', $dta);
    }
}
