<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('skills', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => ['required', 'string', 'max:255'],
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
        ]);

        Skill::create($validated);

        return redirect()->route('skills.index')->with('success', 'Skill berhasil ditambahkan');
    }
}


