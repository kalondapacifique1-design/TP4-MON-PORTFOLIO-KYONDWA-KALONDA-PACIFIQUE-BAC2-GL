<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projets = Project::all();
        return view('projets', compact('projets'));
    }

    public function create() {
        return view('projets.create');
    }

    public function store(Request $request) {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('projets', 'public');

        Project::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect('/projets')->with('success', 'Projet ajouté !');
    }
    // Affiche le formulaire d'édition
    public function edit(\App\Models\Project $project) {
        return view('projets.edit', compact('project'));
    }

    // Enregistre les modifications
    public function update(Request $request, \App\Models\Project $project) {
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projets', 'public');
        }

        $project->update($data);

        return redirect('/projets')->with('success', 'Projet mis à jour !');
    }

    // Supprime le projet
    public function destroy(\App\Models\Project $project) {
        $project->delete();
        return redirect('/projets')->with('success', 'Projet supprimé !');
    }
}
