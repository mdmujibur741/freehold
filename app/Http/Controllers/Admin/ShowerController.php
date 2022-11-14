<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShowerResource;
use App\Models\shower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

use function Termwind\render;

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

    public function store(Request $request)
    {
              $request->validate([
                   'shower' => 'required'
              ],[
                  'shower.required' => ' You Must Fill Shower Input',
              ]);

              shower::create([
                   'shower' => $request->shower,
              ]);

              return Redirect::back()->with('message','Shower Data Added SuccessfullY !.');
    }

    public function edit(shower $shower)
    {
        return Inertia::render('admin/shower/edit',compact('shower'));
    }

    public function update(Request $request, shower $shower)
    {
          $request->validate([
               'shower' => 'required'
          ],[
          'shower.required' => ' You Must Fill Shower Input',
          ]);

          $shower->update([
               'shower' => $request->shower,
          ]);

          return Redirect::route('admin.shower.index')->with('message','Shower data Update Successfully!');

    }

    public function destroy(Request $request, shower $shower)
    {
            $shower->delete();
            return Redirect::back()->with('message', 'Shower data Item delete SuccessfullY !.');
    }
}
