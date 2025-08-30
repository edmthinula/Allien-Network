<?php

namespace App\Http\Controllers;

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
        return view('areas.create');
    }
}
