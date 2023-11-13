<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;

class ConductorController extends Controller
{
    public function index(){
        $conductor = Conductor::all();
        return view("conductores.index", compact("conductor"));
    }
}
