{{-- resources/views/admin/projects_create.blade.php --}}
@extends('admin.layout')

@section('title', 'Tambah Project')
@section('page_title', 'Tambah Project')

@section('content')
<div class="bg-white/80 rounded-2xl shadow p-6">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl md:text-2xl font-bold text-[#262525]">Tambah Project Baru</h2>
    <a href="{{ route('admin.projects.index') }}" class="px-5 py-2 rounded-xl bg-gray-500 text-white font-bold shadow hover:scale-105 transition">Kembali</a>
  </div>

  <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    
    <div>
      <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Project</label>
      <input type="text" id="judul" name="judul" value="{{ old('judul') }}" 
             class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('judul') border-red-500 @enderror" 
             placeholder="Masukkan judul project" required>
      @error('judul')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
      <textarea id="deskripsi" name="deskripsi" rows="4" 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('deskripsi') border-red-500 @enderror" 
                placeholder="Masukkan deskripsi project">{{ old('deskripsi') }}</textarea>
      @error('deskripsi')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Gambar Project</label>
      <input type="file" id="images" name="images[]" multiple accept="image/*" 
             class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('images.*') border-red-500 @enderror">
      <p class="mt-1 text-sm text-gray-500">Pilih beberapa gambar untuk project ini</p>
      @error('images.*')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
      @enderror
    </div>

    <div id="image-preview" class="grid grid-cols-2 md:grid-cols-4 gap-4 hidden">
      <!-- Image previews will be shown here -->
    </div>

    <div class="flex gap-4">
      <button type="submit" class="px-6 py-3 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-lg shadow hover:scale-105 transition">
        Simpan Project
      </button>
      <a href="{{ route('admin.projects.index') }}" class="px-6 py-3 bg-gray-500 text-white font-bold rounded-lg shadow hover:scale-105 transition">
        Batal
      </a>
    </div>
  </form>
</div>

<script>
document.getElementById('images').addEventListener('change', function(e) {
  const files = Array.from(e.target.files);
  const previewContainer = document.getElementById('image-preview');
  
  if (files.length > 0) {
    previewContainer.classList.remove('hidden');
    previewContainer.innerHTML = '';
    
    files.forEach((file, index) => {
      const reader = new FileReader();
      reader.onload = function(e) {
        const div = document.createElement('div');
        div.className = 'relative';
        div.innerHTML = `
          <img src="${e.target.result}" alt="Preview ${index + 1}" class="w-full h-32 object-cover rounded-lg">
          <div class="mt-2">
            <input type="text" name="captions[]" placeholder="Caption gambar ${index + 1}" 
                   class="w-full px-2 py-1 text-sm border border-gray-300 rounded">
          </div>
        `;
        previewContainer.appendChild(div);
      };
      reader.readAsDataURL(file);
    });
  } else {
    previewContainer.classList.add('hidden');
  }
});
</script>
@endsection
