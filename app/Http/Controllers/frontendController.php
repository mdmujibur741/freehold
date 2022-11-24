<?php

namespace App\Http\Controllers;

use App\Http\Resources\AgentResource;
use App\Http\Resources\PropertyResource;
use App\Models\Agent;
use App\Models\Property;
use App\Models\Status;
use Illuminate\Http\Request;
use Inertia\Inertia;

class frontendController extends Controller
{
     public function index()
     {
         $latests = PropertyResource::collection(Property::with('city','bed','shower','road','zipCode','agent','status')->latest()->take(3)->get());
          $status = Status::where('slug', 'sell')->first();
          $sells = PropertyResource::collection(Property::where('status_id', $status->id)->with('city','bed','shower','road','zipCode','agent','status')->take(6)->get());
           $agents =AgentResource::collection(Agent::orderBy('id', 'ASC')->take(4)->get());
        return Inertia::render('frontend/index',compact('latests','sells','agents'));
     }

     public function properties()
     {
         $properties = PropertyResource::collection(Property::with('city','bed','shower','road','zipCode','agent','status')->paginate(6));
        return Inertia::render('frontend/properties',compact('properties'));
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
