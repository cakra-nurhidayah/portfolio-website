<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('gambar')->orderBy('created_at', 'desc')->get();
        return view('admin.projects', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $project = Project::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('projects', 'public');
                Gambar::create([
                    'id_projek' => $project->id_projek,
                    'url' => $path,
                    'caption' => $request->captions[$index] ?? null,
                    'sort_order' => $index
                ]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Projek berhasil ditambahkan!');
    }

    public function show($id)
    {
        $project = Project::with('gambar')->findOrFail($id);
        return view('admin.projects_detail', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::with('gambar')->findOrFail($id);
        return view('admin.projects_edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $project = Project::findOrFail($id);
        $updateData = [
            'judul' => $request->judul,
        ];
        if ($request->has('deskripsi')) {
            $updateData['deskripsi'] = $request->deskripsi;
        }
        $project->update($updateData);

        // Handle new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('projects', 'public');
                Gambar::create([
                    'id_projek' => $project->id_projek,
                    'url' => $path,
                    'caption' => $request->captions[$index] ?? null,
                    'sort_order' => $project->gambar()->count() + $index
                ]);
            }
        }

        return redirect()->route('admin.projects.index')->with('success', 'Projek berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        // Delete images from storage
        foreach ($project->gambar as $gambar) {
            Storage::disk('public')->delete($gambar->url);
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects.index')->with('success', 'Projek berhasil dihapus!');
    }

    public function deleteImage($id)
    {
        $gambar = Gambar::findOrFail($id);
        Storage::disk('public')->delete($gambar->url);
        $gambar->delete();
        
        return response()->json(['success' => true]);
    }
}


