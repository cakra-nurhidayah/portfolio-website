{{-- resources/views/admin/skills.blade.php --}}
@extends('admin.layout')

@section('title', 'Skills')
@section('page_title', 'Skills')

@section('content')
<div class="bg-white/80 rounded-2xl shadow p-6">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl md:text-2xl font-bold text-[#262525]">Daftar Skills</h2>
    <a href="{{ route('admin.skills.create') }}" class="px-5 py-2 rounded-xl bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold shadow hover:scale-105 transition">Tambah</a>
  </div>
  @if ($errors->any())
    <div class="mb-4 text-red-700">
      <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  @if (session('success'))
    <div class="mb-4 p-3 rounded bg-green-100 text-green-800">{{ session('success') }}</div>
  @endif
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse(($skills ?? []) as $skill)
      <div class="rounded-xl p-4 bg-white shadow">
        <div class="w-full h-40 bg-gray-100 overflow-hidden rounded mb-3">
          <img src="{{ $skill->url }}" alt="{{ $skill->judul }}" class="w-full h-full object-cover">
        </div>
        <div class="font-semibold text-lg">{{ $skill->judul }}</div>
        <div class="text-gray-600 text-sm"> {{ strip_tags($skill->deskripsi) }}</div>
        <div class="flex flex-wrap gap-2 mt-3">
          <a href="{{ route('admin.skills.edit', $skill) }}" class="px-4 py-2 rounded-lg bg-[#7E57C2] text-white hover:opacity-90">Edit</a>
          <form method="POST" action="{{ route('admin.skills.destroy', $skill) }}" onsubmit="return confirm('Hapus skill ini?')">
            @csrf
            @method('DELETE')
            <button class="px-4 py-2 rounded-lg bg-red-600 text-white hover:opacity-90">Hapus</button>
          </form>
        </div>
      </div>
    @empty
      <p>Tidak ada data.</p>
    @endforelse
  </div>
</div>
@endsection


