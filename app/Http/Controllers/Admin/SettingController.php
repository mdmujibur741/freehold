<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingController extends Controller
{
    public function create()
    { 
          return Inertia::render('admin/setting/create');
    }

    public function edit()
    {
        # code...
    }
}
