<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Affiche le formulaire
    public function show()
    {
        return view('contact');
    }

    // Enregistre le message dans la base
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Message::create($validated);

        return back()->with('success', 'Message envoyé avec succès !');
    }

    // Affiche les messages pour l'Admin
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }
}
