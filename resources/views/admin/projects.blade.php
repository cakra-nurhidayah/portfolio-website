{{-- resources/views/admin/projects.blade.php --}}
@extends('admin.layout')

@section('title', 'Projects')
@section('page_title', 'Projects')

@section('content')
<div class="bg-white/80 rounded-2xl shadow p-6">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl md:text-2xl font-bold text-[#262525]">Daftar Projects</h2>
    <a href="{{ route('admin.projects.create') }}" class="px-5 py-2 rounded-xl bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold shadow hover:scale-105 transition">Tambah</a>
  </div>
  
  @if(session('success'))
    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
      {{ session('success') }}
    </div>
  @endif

  @if($projects->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($projects as $project)
        <div class="rounded-xl p-4 bg-white text-gray-700 shadow hover:shadow-lg transition">
          @if($project->gambar && $project->gambar->count() > 0)
            <img src="{{ asset('storage/' . $project->gambar->first()->url) }}" alt="{{ $project->judul }}" class="w-full h-48 object-cover rounded-lg mb-4">
          @else
            <div class="w-full h-48 bg-gray-200 rounded-lg mb-4 flex items-center justify-center">
              <span class="text-gray-500">No Image</span>
            </div>
          @endif
          
          <h3 class="font-bold text-lg mb-2">{{ $project->judul }}</h3>
          <p class="text-gray-600 text-sm mb-4 line-clamp-3">{{ Str::limit($project->deskripsi, 100) }}</p>
          
          <div class="flex gap-2">
            <a href="{{ route('admin.projects.show', $project->id_projek) }}" class="flex-1 px-3 py-2 bg-blue-500 text-white rounded-lg text-center text-sm hover:bg-blue-600 transition">Detail</a>
            <form action="{{ route('admin.projects.destroy', $project->id_projek) }}" method="POST" class="flex-1" onsubmit="return confirm('Apakah Anda yakin ingin menghapus projek ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="w-full px-3 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition">Hapus</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <div class="rounded-xl p-4 bg-white text-gray-700 shadow text-center">
      <p class="text-gray-500">Belum ada projek.</p>
    </div>
  @endif
</div>
@endsection


