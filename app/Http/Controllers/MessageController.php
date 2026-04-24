<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Enregistrer le message du formulaire
    public function store(Request $request) {
        $request->validate(['name' => 'required', 'email' => 'required|email', 'message' => 'required']);
        Message::create($request->all());
        return back()->with('success', 'Message envoyé avec succès !');
    }

    // Vue Admin : tous les messages
    public function index() {
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }

    // Supprimer (mettre à la corbeille)
    public function destroy($id) {
        Message::findOrFail($id)->delete();
        return back()->with('success', 'Message mis à la corbeille');
    }

    // Voir la corbeille
    public function trash() {
        $messages = Message::onlyTrashed()->get();
        return view('admin.trash', compact('messages'));
    }

    // Vider la corbeille (suppression définitive)
    public function forceDelete($id) {
        Message::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('success', 'Message supprimé définitivement');
    }
}
