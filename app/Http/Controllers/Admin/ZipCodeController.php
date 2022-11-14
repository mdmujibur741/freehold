<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Http\Resources\RoadResource;
use App\Http\Resources\ZipCodeResource;
use App\Models\City;
use App\Models\road;
use App\Models\zipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ZipCodeController extends Controller
{
    public function index()
    {
          $zipCode = ZipCodeResource::collection(zipCode::with('city','road')->paginate(10));
          return Inertia::render('admin/zipCode/index', compact('zipCode'));
    }

    public function create()
    {
          $cities = CityResource::collection(City::all());
          $roads = RoadResource::collection(road::all());
          return Inertia::render('admin/zipCode/create', compact('cities','roads'));
    }

    public function store(Request $request)
    {
        $request->validate([         
              'city_id' => 'required',
              'road_id' => 'required',
              'zipCode' => 'required|unique:zip_codes',
        ],[
             'city_id.required' => 'You Must Fill The City Input! .',
             'road_id.required' => 'You Must Fill The Road Input! .',
             'zipCode.required' => 'You Must Fill The Zip Code Input! .'
        ]);

        zipCode::create([
             'city_id' => $request->city_id,
             'road_id' => $request->road_id,
             'zipCode' => $request->zipCode,
        ]);
         
        return Redirect::route('admin.zipCode.index')->with('message', 'Zip Code Added Successfully !.');
    }

    public function edit(zipCode $zipCode)
    {
          $cities = CityResource::collection(City::all());
          $roads = RoadResource::collection(road::all());
          return Inertia::render('admin/zipCode/edit',compact('cities','roads','zipCode'));
    }


    public function update(Request $request, zipCode $zipCode)
    {
      $request->validate([         
            'city_id' => 'required',
            'road_id' => 'required',
            'zipCode' => 'required',
      ]);
       $zipCode->update([
           'city_id' => $request->city_id,
           'road_id' => $request->road_id,
           'zipCode' => $request->zipCode,
       ]);

       return Redirect::route('admin.zipCode.index')->with('message','Zip Code Updated Successfully !.');
    }

    public function destroy(zipCode $zipCode)
    {
         $zipCode->delete();
         return Redirect::back()->with('message', 'Zip Code Delete Successfully! .');
    }
}
