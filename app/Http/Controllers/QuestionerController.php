<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questioner;
use Illuminate\Support\Facades\Auth;

class QuestionerController extends Controller
{
    public function index()
    {
        $questioners = Questioner::where('user_id', Auth::id())->get();
        return view('questioners.index', compact('questioners'));
    }

    public function create()
    {
        return view('questioners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        Questioner::create([
            'user_id' => Auth::id(),
            'question' => $request->question,
        ]);

        return redirect()->route('questioners.index')->with('success', 'Question added successfully!');
    }
}

