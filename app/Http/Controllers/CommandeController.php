<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commande::get();
        return view('commandes.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::get();
        return view('commandes.ajouter', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Commande::create($request->all());
        return redirect()->route('commandes.index')->with('success', 'Command created successfully.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = Commande::find($id);
        return view('commandes.show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commande = Commande::find($id);
        $clients = Client::all();
        return view('commandes.edit', compact('commande','clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = Commande::find($id);
        $updated->update($request->all());
        return redirect()->route('commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commande = Commande::find($id);
        $commande->delete();
        return redirect()->route('commandes.index')->with('success', 'Command deleted successfully.');
    }
}
