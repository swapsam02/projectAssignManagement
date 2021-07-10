<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function view()
    {
        return view('dashboard.roles.index');
    }

    public function add()
    {
        return view('dashboard.roles.add');
    }

    public function edit()
    {
        return view('dashboard.roles.edit');
    }
}
