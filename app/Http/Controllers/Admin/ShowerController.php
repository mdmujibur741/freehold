<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShowerResource;
use App\Models\shower;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowerController extends Controller
{
    public function index()
    {
         $showers = ShowerResource::collection(shower::paginate(10));
         return Inertia::render('admin/shower/index',compact('showers'));
    }

    public function create()
    {
         return Inertia::render('admin/shower/create');
    }
}
