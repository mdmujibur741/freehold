<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;


class CityController extends Controller
{
    public function index()
    {
         $cities = CityResource::collection(City::paginate(10));
         return Inertia::render('admin/city/index',compact('cities'));
    }

    public function create()
    {
           return Inertia::render('admin/city/create');
        
    }

    public function store(Request $request)
    {
           $request->validate([
              'city' => 'required|min:2|unique:cities',
           ],[
             'city.required' => 'You Must Fill City Input',
           ]);

           City::create([
                 'city' => $request->city,
                 'slug' => Str::slug($request->city,'-'),
           ]);
          return Redirect::route('admin.city.create')->with('message', 'City Added SuccessFully');
    }

    public function edit(City $city)
    {
         return Inertia::render('admin/city/edit',compact('city'));
    }

    public function update(Request $request, City $city)
    {
      $request->validate([
            'city' => 'required|min:2',
         ],[
           'city.required' => 'You Must Fill City Input',
         ]);

         $city->update([
            'city' => $request->city,
            'slug' => Str::slug($request->city,'-'),
         ]);
 
         return Redirect::route('admin.city.index')->with('message', 'City Update Successfully!');
        
    }

    public function destroy(City $city)
    {
         $city->delete();
         return Redirect::back()->with('message', 'City Delete SuccessfullY!.');
    }
}
