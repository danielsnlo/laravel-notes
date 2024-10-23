<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
//1
    public function index()
    {
        $notes = Note::all();
        return view ('notes.index', ['allNotes' => $notes]);
    }


//2
    public function create()
    {
        return view ('notes.create');
    }


//3
    public function store(Request $request)
    {
        // \log::debug($request);
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        Note::create($data);

        return redirect('/notes');
    }
}