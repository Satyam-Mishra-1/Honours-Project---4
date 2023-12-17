<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    //
    // In IdeaController.php
use App\Models\Idea;
use Illuminate\Http\Request;

public function store(Request $request)
{
    $request->validate([
        'content' => 'required|string|max:255',
    ]);

    $idea = Idea::create([
        'content' => $request->input('content'),
    ]);

    return redirect()->back()->with('success', 'Idea created successfully');
}


}
