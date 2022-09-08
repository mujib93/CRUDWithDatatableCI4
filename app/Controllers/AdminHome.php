<?php

namespace App\Controllers;

class AdminHome extends BaseController
{
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        return view('admin/vdashboard_admin', $data);
    }
}