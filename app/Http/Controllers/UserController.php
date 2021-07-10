<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        return view('dashboard.users.index');
    }

    public function add()
    {
        return view('dashboard.users.add');
    }

    public function edit()
    {
        return view('dashboard.users.edit');
    }
}
