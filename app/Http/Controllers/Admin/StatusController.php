<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\StatusResource;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;

class StatusController extends Controller
{
    public function index()
    {
       $statuses = StatusResource::collection(Status::all()); 
        return Inertia::render('admin/status/index',compact('statuses'));  
    }

    public function create()
    {
          return Inertia::render('admin/status/create');
    }

    public function store(Request $request)
    {
          $request->validate([
               'status' => 'required|unique:statuses'
          ]);

          Status::create([
              'status' => $request->status,
              'slug' => Str::slug($request->status, '-'), 
          ]);
          return Redirect::back()->with('message','Status Added Successfully! .');
    }

    public function edit(Status $status)
    { 
        return Inertia::render('admin/status/edit',compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $request->validate([
            'status' => 'required'
       ]);

       $status->update([
           'status' => $request->status,
           'slug' => Str::slug($request->status, '-'), 
       ]);

       return Redirect::route('admin.status.index')->with('message','Status Added Successfully! .');
    }

    public function destroy(Status $status)
    {
          $status->delete();
          return Redirect::back()->with('message',' Status data Item Delete SuccessfullY !.');
    }
}
