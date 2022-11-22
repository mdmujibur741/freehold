<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class frontendController extends Controller
{
     public function index()
     {
        return Inertia::render('frontend/index');
     }

     public function properties()
     {
        return Inertia::render('frontend/property');
     }

     public function single()
     {
      return Inertia::render('frontend/single');
     }

     public function contact()
     {
         return Inertia::render('frontend/contact');
     }

}
