<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('search', compact('formations'));
    }
    public function search($id)
    {
        $formation = Formation::find($id);
        $classes = Classe::where('idformation', $id)->get();
    return response()->json(compact('formation', 'classes'));
    }
}
