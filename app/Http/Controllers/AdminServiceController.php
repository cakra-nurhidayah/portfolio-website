<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services', compact('services'));
    }

    public function create()
    {
        return view('admin.services_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => ['required', 'file', 'image', 'max:2048'],
            'caption' => ['nullable', 'string', 'max:255'],
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
        ]);

        $path = $request->file('url')->store('services', 'public');

        Service::create([
            'url' => Storage::url($path),
            'caption' => $validated['caption'],
            'judul' => $validated['judul'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('admin.services')->with('success', 'Service berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        return view('admin.services_edit', compact('service'));
    }

    public function update(Request $request, Service $service)
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
            $path = $request->file('url')->store('services', 'public');
            $data['url'] = Storage::url($path);
        }

        $service->update($data);

        return redirect()->route('admin.services')->with('success', 'Service berhasil diupdate');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services')->with('success', 'Service berhasil dihapus');
    }
}
