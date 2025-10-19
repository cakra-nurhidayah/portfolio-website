{{-- resources/views/admin/services.blade.php --}}
@extends('admin.layout')

@section('title', 'Services')
@section('page_title', 'Services')

@section('content')
<div class="bg-white/80 rounded-2xl shadow p-6">
  @if(session('success'))
    <div class="mb-4 p-3 rounded bg-green-100 text-green-800">{{ session('success') }}</div>
  @endif
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl md:text-2xl font-bold text-[#262525]">Daftar Services</h2>
    <a href="{{ route('admin.services.create') }}" class="px-5 py-2 rounded-xl bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold shadow hover:scale-105 transition">Tambah</a>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($services as $service)
      <div class="bg-white rounded-xl shadow p-4">
        <div class="w-full h-40 bg-gray-100 rounded-lg overflow-hidden mb-3">
          <img src="{{ asset($service->url) }}" alt="{{ $service->judul }}" class="w-full h-full object-cover">
        </div>
        <h3 class="text-lg font-bold text-[#262525]"> {{ $service->judul }}</h3>
        <p class="text-gray-700 mb-4">{{ $service->deskripsi }}</p>
        <div class="flex gap-2">
          <a href="{{ route('admin.services.edit', $service) }}" class="px-4 py-2 rounded-lg bg-blue-500 text-white hover:bg-blue-600">Edit</a>
          <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Yakin hapus service ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600">Hapus</button>
          </form>
        </div>
      </div>
    @empty
      <p class="text-gray-700">Belum ada data service.</p>
    @endforelse
  </div>
</div>
@endsection


