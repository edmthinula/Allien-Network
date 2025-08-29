<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {

        $areas = Area::orderBy('created_at','desc')->get();
        return view('Areas.index', ["areas" => $areas]);
    }
}
