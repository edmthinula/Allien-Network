<?php

namespace App\Http\Controllers;

use App\Models\AllienClan;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::with('clan')->orderBy('created_at', 'desc')->paginate(10);
        return view('Areas.index', ["areas" => $areas]);
    }
    public function show($id)
    {
        $id = Area::with('clan')->findOrFail($id);
        return view('Areas.show', ["area" => $id]);
    }
    public function create()
    {
        $clans = AllienClan::all();
        return view('areas.create',['clans'=>$clans]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'population' => 'required|integer|min:0|max:250',
            'discription'=>'required|string|min:20|max:400,',
            'allien_clan_id'=>'required|exists:allien_clans,id' ,
        ]);
        Area::create($validated);
        return redirect()->route('areas.index');

    }
}
