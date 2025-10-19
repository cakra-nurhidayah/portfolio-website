{{-- resources/views/admin/skills_create.blade.php --}}
@extends('admin.layout')

@section('title', 'Tambah Skill')
@section('page_title', 'Tambah Skill')

@push('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
<div class="bg-white/80 rounded-2xl shadow p-6">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl md:text-2xl font-bold text-[#262525]">Tambah Skill Baru</h2>
    <div class="flex gap-2">
      <a href="{{ route('admin.skills') }}" class="px-5 py-2 rounded-xl bg-gray-500 text-white font-bold shadow hover:scale-105 transition">Kembali</a>
    </div>
  </div>

  <div class="space-y-6">
    <!-- Rich Text Editor for Skill Description -->
    <div class="bg-white rounded-xl p-6 shadow">
      <h3 class="text-xl font-bold text-gray-800 mb-4">Deskripsi Skill</h3>
      
      <!-- Toolbar -->
      <div class="border border-gray-300 rounded-lg mb-4 p-2 bg-gray-50">
        <div class="flex flex-wrap gap-2">
          <!-- Font Controls -->
          <select id="fontFamily" class="px-2 py-1 border border-gray-300 rounded text-sm">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Georgia">Georgia</option>
            <option value="Verdana">Verdana</option>
            <option value="Helvetica">Helvetica</option>
            <option value="Courier New">Courier New</option>
          </select>
          
          <select id="fontSize" class="px-2 py-1 border border-gray-300 rounded text-sm">
            <option value="12px">12px</option>
            <option value="14px">14px</option>
            <option value="16px" selected>16px</option>
            <option value="18px">18px</option>
            <option value="20px">20px</option>
            <option value="24px">24px</option>
            <option value="28px">28px</option>
            <option value="32px">32px</option>
          </select>
          
          <!-- Text Formatting -->
          <button onclick="execCommand('bold')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm font-bold">B</button>
          <button onclick="execCommand('italic')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm italic">I</button>
          <button onclick="execCommand('underline')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm underline">U</button>
          
          <!-- Text Alignment -->
          <button onclick="execCommand('justifyLeft')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm">⬅</button>
          <button onclick="execCommand('justifyCenter')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm">↔</button>
          <button onclick="execCommand('justifyRight')" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm">➡</button>
          
          <!-- Link -->
          <button onclick="insertLink()" class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm">🔗</button>
          
        </div>
      </div>
      
      <!-- Editor -->
      <div id="editor" contenteditable="true" class="min-h-96 p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F9B654] focus:border-transparent" 
           style="font-family: Arial; font-size: 16px;">
        <p>Mulai menulis deskripsi skill Anda di sini...</p>
      </div>
    </div>

    <!-- Create Form -->
    <form method="POST" action="{{ route('admin.skills.store') }}" enctype="multipart/form-data" class="bg-white rounded-xl p-6 shadow space-y-6">
      @csrf

      <input type="hidden" name="deskripsi" id="deskripsi_hidden">

      <div>
        <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Skill</label>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('judul') border-red-500 @enderror" 
               placeholder="Masukkan judul skill" required>
        @error('judul')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="url" class="block text-sm font-medium text-gray-700 mb-2">Gambar Skill</label>
        <input type="file" id="url" name="url" accept="image/*" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('url') border-red-500 @enderror" required>
        <p class="mt-1 text-sm text-gray-500">Pilih gambar untuk skill ini (PNG/JPG)</p>
        @error('url')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for="caption" class="block text-sm font-medium text-gray-700 mb-2">Caption Gambar</label>
        <input type="text" id="caption" name="caption" value="{{ old('caption') }}" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent @error('caption') border-red-500 @enderror" 
               placeholder="Masukkan caption untuk gambar (opsional)">
        <p class="mt-1 text-sm text-gray-500">Caption akan muncul di pojok kiri bawah gambar</p>
        @error('caption')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex gap-2 flex-wrap">
        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
          Simpan Skill
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Link Modal -->
<div id="linkModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white rounded-lg p-6 w-96 max-w-full mx-4">
    <h3 class="text-lg font-bold mb-4">Tambah Link</h3>
    <div class="space-y-4">
      <div>
        <label for="linkText" class="block text-sm font-medium text-gray-700 mb-1">Teks Link</label>
        <input type="text" id="linkText" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent" placeholder="Masukkan teks link">
      </div>
      <div>
        <label for="linkUrl" class="block text-sm font-medium text-gray-700 mb-1">URL</label>
        <input type="url" id="linkUrl" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F9B654] focus:border-transparent" placeholder="https://example.com">
      </div>
    </div>
    <div class="flex gap-2 mt-6">
      <button onclick="confirmLink()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">Tambah Link</button>
      <button onclick="closeLinkModal()" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">Batal</button>
    </div>
  </div>
</div>

<script>
// Rich Text Editor Functions
function execCommand(command, value = null) {
  document.execCommand(command, false, value);
  document.getElementById('editor').focus();
}

// Font Family Change
document.getElementById('fontFamily').addEventListener('change', function() {
  execCommand('fontName', this.value);
});

// Font Size Change
document.getElementById('fontSize').addEventListener('change', function() {
  execCommand('fontSize', '7'); // This is a workaround for font size
  const editor = document.getElementById('editor');
  editor.style.fontSize = this.value;
});

// Link Functions
function insertLink() {
  const modal = document.getElementById('linkModal');
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  document.getElementById('linkText').focus();
}

function closeLinkModal() {
  const modal = document.getElementById('linkModal');
  modal.classList.add('hidden');
  modal.classList.remove('flex');
  document.getElementById('linkText').value = '';
  document.getElementById('linkUrl').value = '';
}

function confirmLink() {
  const linkText = document.getElementById('linkText').value.trim();
  const linkUrl = document.getElementById('linkUrl').value.trim();
  
  if (!linkText || !linkUrl) {
    alert('Mohon isi teks link dan URL!');
    return;
  }
  
  // Validate URL
  try {
    new URL(linkUrl);
  } catch (e) {
    alert('URL tidak valid!');
    return;
  }
  
  // Insert link
  const editor = document.getElementById('editor');
  editor.focus();
  
  // Create link element
  const link = document.createElement('a');
  link.href = linkUrl;
  link.textContent = linkText;
  link.target = '_blank';
  link.rel = 'noopener noreferrer';
  
  // Insert the link
  if (window.getSelection().rangeCount > 0) {
    const range = window.getSelection().getRangeAt(0);
    range.deleteContents();
    range.insertNode(link);
  } else {
    editor.appendChild(link);
  }
  
  closeLinkModal();
}

// Keyboard shortcuts
document.getElementById('editor').addEventListener('keydown', function(e) {
  // Ctrl+B for bold
  if (e.ctrlKey && e.key === 'b') {
    e.preventDefault();
    execCommand('bold');
  }
  // Ctrl+I for italic
  if (e.ctrlKey && e.key === 'i') {
    e.preventDefault();
    execCommand('italic');
  }
  // Ctrl+U for underline
  if (e.ctrlKey && e.key === 'u') {
    e.preventDefault();
    execCommand('underline');
  }
  // Ctrl+K for link
  if (e.ctrlKey && e.key === 'k') {
    e.preventDefault();
    insertLink();
  }
});

// Close modal when clicking outside
document.getElementById('linkModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeLinkModal();
  }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeLinkModal();
  }
});

// Save content to hidden input before form submission
document.querySelector('form').addEventListener('submit', function(e) {
  const content = document.getElementById('editor').innerHTML;
  document.getElementById('deskripsi_hidden').value = content;
});
</script>
@endsection


