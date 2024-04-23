<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    public function note()
    {
        return view('note');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|max:255",
            "content" => "required",
        ]);

        $note = new Note($validatedData);
        $note->save();

        return redirect()->route('mynotes')->with('success', 'Note Created Successfully');
    }

    public function ShowNotes(Note $notes)
    {
        $notes = Note::query()->latest()->get();
        return view("notes.get-data",[
            "notes" => $notes
        ]);
    }

    public function edit()
    {
        return view("notes.edit");
    }

    public function update(NoteRequest $request, Note $notes)
    {
        $notes ->update($request->validated());
        return redirect('mynotes');
    }

    public function destroy(Note $notes)
    {
        $notes->delete();
        return redirect()->route('mynotes')->with("success", "Note alredy deleted");
    }


}
