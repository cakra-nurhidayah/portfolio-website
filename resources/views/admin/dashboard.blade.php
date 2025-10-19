{{-- resources/views/admin/dashboard.blade.php --}}
@extends('admin.layout')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="rounded-2xl p-6 bg-gradient-to-br from-[#F9B654] to-[#FFD580] text-black shadow-lg">
        <div class="text-black/70">Total Skills</div>
        <div class="text-4xl font-extrabold">-</div>
    </div>
    <div class="rounded-2xl p-6 bg-white shadow-lg">
        <div class="text-gray-500">Total Services</div>
        <div class="text-4xl font-extrabold text-[#4599b3]">-</div>
    </div>
    <div class="rounded-2xl p-6 bg-white shadow-lg">
        <div class="text-gray-500">Total Projects</div>
        <div class="text-4xl font-extrabold text-[#4599b3]">-</div>
    </div>
    <div class="md:col-span-3 rounded-2xl p-6 bg-white shadow-lg">
        <h2 class="text-xl font-semibold mb-2">Welcome</h2>
        <p class="text-gray-700">Ini adalah halaman dashboard admin. Fungsi akan ditambahkan nanti.</p>
    </div>
  </div>
@endsection


