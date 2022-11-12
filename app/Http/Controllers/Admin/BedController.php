<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\BedResource;
use App\Models\bed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;


class BedController extends Controller
{
    public function index()
    {
         $beds = BedResource::collection(bed::paginate(10));
         return Inertia::render('admin/bed/index',compact('beds'));
    }

    public function create()
    {
           return Inertia::render('admin/bed/create');
        
    }

    public function store(Request $request)
    {
           $request->validate([
              'bed' => 'required|unique:beds',
           ],[
             'bed.required' => 'You Must Fill Bed Input',
           ]);

           bed::create([
                 'bed' => $request->bed,
           ]);
          return Redirect::route('admin.bed.create')->with('message', 'Bed Added SuccessFully');
    }

    public function edit(bed $bed)
    {
         return Inertia::render('admin/bed/edit',compact('bed'));
    }

    public function update(Request $request, bed $bed)
    {
      $request->validate([
            'bed' => 'required',
         ],[
           'bed.required' => 'You Must Fill Bed Input',
         ]);

         $bed->update([
            'bed' => $request->bed,
         ]);
 
         return Redirect::route('admin.bed.index')->with('message', 'Bed Update Successfully!');
        
    }

    public function destroy(Request $request, bed $bed)
    {
         $bed->delete();
         return Redirect::back()->with('message', 'Bed Delete SuccessfullY!.');
    }
}
