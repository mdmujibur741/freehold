<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Http\Resources\AgentResource;
use App\Http\Resources\BedResource;
use App\Http\Resources\CityResource;
use App\Http\Resources\PropertyResource;
use App\Http\Resources\RoadResource;
use App\Http\Resources\ShowerResource;
use App\Http\Resources\StatusResource;
use App\Http\Resources\ZipCodeResource;
use App\Models\Agent;
use App\Models\bed;
use App\Models\City;
use App\Models\Property;
use App\Models\road;
use App\Models\shower;
use App\Models\Status;
use App\Models\zipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Illuminate\Support\Str;



class PropertyController extends Controller
{
    public function index()
    {
        $property = PropertyResource::collection(Property::with('city','bed','shower','road','zipCode','agent','status')->latest()->paginate(10));
         return Inertia::render('admin/property/index',compact('property'));
    }

    public function create()
    {
          $cities = CityResource::collection(City::all());
          $beds = BedResource::collection(bed::all());
          $showers = ShowerResource::collection(shower::all());
          $roads = RoadResource::collection(road::all());
          $zipCodes = ZipCodeResource::collection(zipCode::all());
          $agents = AgentResource::collection(Agent::all());
          $statuses = StatusResource::collection(Status::all());
          return Inertia::render('admin/property/create',compact('cities','beds','showers','roads','zipCodes','agents','statuses'));
    }


    public function store(PropertyRequest $request)
    {
         //   Image One Upload
         if($request->hasFile('imageOne')){
            $imageOne = $request->file('imageOne')->store('property');
       }

        //   Image Two Upload
       if($request->hasFile('imageTwo')){
           $imageTwo = $request->file('imageTwo')->store('property');
      }
          Property::create([
          'name' => $request->name,
          'slug' => Str::slug($request->name, '-'),
          'price' => $request->price,
          'city_id' => $request->city_id,
          'bed_id' => $request->bed_id,
          'shower_id' => $request->shower_id,
          'road_id' => $request->road_id,
          'agent_id' => $request->agent_id,
          'status_id' => $request->status_id,
          'zipCode_id' => $request->zipCode_id,
          'description' => $request->description,
          'imageOne' => $imageOne,
          'imageTwo' => $imageTwo,

       
    ]);
         
          return Redirect::route('admin.property.create')->with('message','Property Added Successfully !.');
    }


    public function edit(Property $property)
    {
        $cities = CityResource::collection(City::all());
        $beds = BedResource::collection(bed::all());
        $showers = ShowerResource::collection(shower::all());
        $roads = RoadResource::collection(road::all());
        $zipCodes = ZipCodeResource::collection(zipCode::all());
        $agents = AgentResource::collection(Agent::all());
        $statuses = StatusResource::collection(Status::all());
        return Inertia::render('admin/property/edit', compact('cities','beds','showers','roads','zipCodes','agents','statuses','property'));
    }

    public function update(Request $request, Property $property)
    {
        $imageOne = $property->imageOne;
        $imageTwo = $property->imageTwo;
         $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'agent_id' => 'required',
            'bed_id' => 'required',
            'status_id' => 'required',
            'shower_id' => 'required',
            'city_id' => 'required',
            'road_id' => 'required',
            'zipCode_id' => 'required',
            'description' => 'required|min:10',
         ]);

         if($request->hasFile('imageOne')){
              Storage::delete($property->imageOne);
              $imageOne = $request->file('imageOne')->store('property');
         }
         if($request->hasFile('imageTwo')){
            Storage::delete($property->imageTwo);
            $imageTwo = $request->file('imageTwo')->store('property');
       }

       $property->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name, '-'),
        'price' => $request->price,
        'agent_id' => $request->agent_id,
        'bed_id' => $request->bed_id,
        'shower_id' => $request->shower_id,
         'city_id' => $request->city_id,
        'road_id' => $request->road_id,
        'zipCode_id' => $request->zipCode_id,
        'status' => $request->status_id,
        'description' => $request->description,
        'imageOne' => $imageOne,
        'imageTwo' => $imageTwo,
       ]);

        return Redirect::route('admin.property.index')->with('message', 'Property Updated SuccessfullY !');
    }


    public function destroy(Property $property)
    {
          Storage::delete($property->imageOne, $property->imageTwo);
          $property->delete();
          return Redirect::back();
    }

}
