<?php

namespace App\Http\Controller;

use Illuminate\Http\Reuqest;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $posts = Note::all();
        return view ('notes.index', ['allNotes' => $notes]);
    }
}