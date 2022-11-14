<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\RoadResource;
use App\Models\City;
use App\Models\road;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Inertia\Inertia;

use function Termwind\render;

class RoadController extends Controller
{
      public function index()
      {
          $roads = RoadResource::collection(road::with('city')->paginate(10));
         
          return Inertia::render('admin/road/index',compact('roads'));
      }

      public function create()
      {
           $city = CityResource::collection(City::all());
           return Inertia::render('admin/road/create', compact('city'));
      }

      public function store(Request $request)
      {
         $request->validate([
               'city_id' => 'required',
               'road' => 'required|unique:roads'
         ],
         [
                'city_id.required' => "You Must Fill City! .",
                'road.required' => "You Must Fill Road! . "
         ]);

         road::create([
             'city_id' => $request->city_id,
             'road' => $request->road,
         ]);

           return Redirect::back()->with('message', 'Road Added successfullY !.');
      }

      public function edit(road $road)
      {
            $cities = CityResource::collection(City::all());
            return Inertia::render('admin/road/edit',compact('road','cities'));
      }

      public function update(Request $request, road $road)
      {
            
            $request->validate([
                  'city_id' => 'required',
                  'road' => 'required'
            ],
            [
                   'city_id.required' => "You Must Fill City! .",
                   'road.required' => "You Must Fill Road! . "
            ]);

            $road->update([
                 'city_id' => $request->city_id,
                 'road' => $request->road,
            ]);

            return Redirect::route('admin.road.index')->with('message','Road Update SuccessfullY ! .');
   
      }

      public function destroy(road $road)
      {
             $road->delete();
             return Redirect::back()->with('message', 'Road Data Item Delete Successfully !.');
      }
}
