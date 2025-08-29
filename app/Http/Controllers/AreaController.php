<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::orderBy('created_at', 'desc')->paginate(10);
        return view('Areas.index', ["areas" => $areas]);
    }
    public function show($id)
    {
        $id = Area::findOrFail($id);
        return view('Areas.show', ["area" => $id]);
    }
    public function create()
    {
        return view('areas.create');
    }
}
