<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    public function index()
    {
        return view('flashcards.index');
    }
    public function show()
    {
        return view('flashcards.show');
    }
}
