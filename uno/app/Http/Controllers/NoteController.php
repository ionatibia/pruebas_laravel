<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index($id = 25)
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
        /* $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save(); */
        Note::create($request->all());

        return redirect(route('note.index'));
    }

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }
}
