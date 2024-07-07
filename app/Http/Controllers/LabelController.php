<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Label;

class LabelController extends Controller
{
    public function index()
    {
        $labels = Label::all();
        return view('layouts.labels', compact('labels'));
    }

    public function show(Label $label)
    {
        return view('labels.show', compact('label'));
    }

    public function create()
    {
        return view('labels.create');
    }

    public function store(Request $request)
    {
        $label = Label::create($request->all());
        return redirect()->route('layouts.labels');
    }

    public function edit(Label $label)
    {
        return view('labels.edit', compact('label'));
    }

    public function update(Request $request, Label $label)
    {
        $label->update($request->all());
        return redirect()->route('layouts.labels');
    }

    public function destroy(Label $label)
    {
        $label->delete();
        return redirect()->route('layouts.labels');
    }
}