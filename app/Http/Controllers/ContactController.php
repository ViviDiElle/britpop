<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Usa il modello Contact
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Assicurati di avere una classe Mail chiamata ContactMail

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all(); // Ottieni tutti i contatti dal database
        return view('layouts.contact', ['contact' => $contact]); // Passa i contatti alla vista
    }

    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->route('layouts.contact');
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('layouts.contact');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('layouts.contact');
    }

    public function sendmail(Request $request)
    {
        $data = $request->all();

        \Log::info('Email inviata con successo!', $data);

        return back()->with('success', 'Email inviata con successo!');
    }
}
