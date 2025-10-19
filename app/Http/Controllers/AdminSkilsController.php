<?php

namespace App\Http\Controllers;
use App\Models\Skill;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSkilsController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('admin.skills', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => ['required', 'file', 'image', 'max:2048'],
            'caption' => ['nullable', 'string', 'max:255'],
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
        ]);

        $path = $request->file('url')->store('skills', 'public');

        Skill::create([
            'url' => Storage::url($path),
            'caption' => $validated['caption'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('admin.skills')->with('success', 'Skill berhasil ditambahkan');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills_edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'url' => ['nullable', 'file', 'image', 'max:2048'],
            'caption' => ['nullable', 'string', 'max:255'],
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
        ]);

        $data = [
            'caption' => $validated['caption'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
        ];

        if ($request->hasFile('url')) {
            $path = $request->file('url')->store('skills', 'public');
            $data['url'] = Storage::url($path);
        }

        $skill->update($data);

        return redirect()->route('admin.skills')->with('success', 'Skill berhasil diupdate');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skills')->with('success', 'Skill berhasil dihapus');
    }
}
