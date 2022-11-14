<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AgentRequest;
use App\Http\Resources\AgentResource;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

use function Termwind\render;

class AgentController extends Controller
{
    public function index()
    {
        $agents = AgentResource::collection(Agent::latest()->paginate(10));
        return Inertia::render('admin/agent/index', compact('agents'));
    }

    public function create()
    {
        return Inertia::render('admin/agent/create');
    }

    public function store(AgentRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('agent');
        }
            Agent::create([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'image' => $image,
            ]);
       
        return Redirect::back()->with('message', 'Agent Added SuccessfullY ! .');
    }

    public function edit(Agent $agent)
    {
          return Inertia::render('admin/agent/edit',compact('agent'));
    }

    public function update(Request $request, Agent $agent)
    {

         $request->validate([
                   'name' => 'required|min:3',
                   'title' => 'required|min:10',
                   'description' => 'required|min:15',
                   'facebook' => 'required|url',
         ]);

         $image = $agent->image;
         if($request->hasFile('image')){
              Storage::delete($image);
              $image = $request->file('image')->store('agent');
         }

         $agent->update([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'image' => $image
         ]);

         return Redirect::route('admin.agent.index')->with('message','Agent Data Update Successfully !.');
    }


    public function destroy(Agent $agent)
    {
          Storage::delete($agent->image);
          $agent->delete();
          return Redirect::back()->with('message', 'Agent data Delete SuccessfullY. !');
    }
}
