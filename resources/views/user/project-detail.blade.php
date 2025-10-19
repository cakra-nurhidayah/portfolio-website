<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->judul }} | Cakra Portfolio</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #4599b3;
        }

        .gradient-text {
            background: linear-gradient(135deg, #F9B654, #FFD580, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .project-image {
            transition: all 0.3s ease;
        }

        .project-image:hover {
            transform: scale(1.05);
        }

        .back-button {
            transition: all 0.3s ease;
        }

        .back-button:hover {
            transform: translateX(-5px);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>

<body class="min-h-screen">
    <!-- Navbar -->
    <nav class="flex justify-between items-center px-8 py-4 bg-[#4599b3]/90 shadow-lg rounded-b-2xl mb-6">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/astrazen.png') }}" alt="Cakra Astra Zen" class="w-20 h-20 rounded-full border-2 border-white shadow-md">
            <span class="ml-2 text-2xl font-extrabold bg-gradient-to-r from-[#000000] via-white to-[#000000] bg-clip-text text-transparent tracking-wide drop-shadow-lg animate-pulse">
                Cakra <span class="mx-1 text-lg font-light text-white/80">|</span> Astra<span class="text-[#262525] font-black">_zen</span>
            </span>
        </div>
        <ul class="flex gap-2 md:gap-4">
            <li><a href="{{ route('home') }}" class="px-5 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition-all duration-200">Home</a></li>
            <li><a href="{{ route('projects') }}" class="px-5 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition-all duration-200">Project</a></li>
            <li><a href="{{ route('about') }}" class="px-5 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition-all duration-200">About</a></li>
            <li><a href="#" class="px-5 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition-all duration-200">Contact</a></li>
        </ul>
    </nav>

    <!-- Back Button -->
    <div class="container mx-auto px-6 mb-8">
        <a href="{{ route('projects') }}" class="back-button inline-flex items-center text-white/80 hover:text-[#F9B654] transition-colors duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Projects
        </a>
    </div>

    <!-- Project Detail Content -->
    <div class="container mx-auto px-6 pb-16">
        <!-- Project Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-6 floating">
                {{ $project->judul }}
            </h1>
            <div class="max-w-4xl mx-auto">
                <p class="text-xl text-white/90 leading-relaxed">
                    {{ $project->deskripsi }}
                </p>
            </div>
        </div>

        <!-- Project Images Gallery -->
        @if($project->gambar->count() > 0)
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-white mb-8 text-center">Project Gallery</h2>
                
                @if($project->gambar->count() == 1)
                    <!-- Single Image -->
                    <div class="max-w-4xl mx-auto">
                        <div class="bg-white/10 rounded-2xl overflow-hidden shadow-2xl border border-white/20">
                            <img src="{{ asset('storage/' . $project->gambar->first()->path_gambar) }}" 
                                 alt="{{ $project->judul }}" 
                                 class="project-image w-full h-auto">
                        </div>
                    </div>
                @else
                    <!-- Multiple Images Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($project->gambar as $gambar)
                            <div class="bg-white/10 rounded-2xl overflow-hidden shadow-xl border border-white/20 group cursor-pointer"
                                 onclick="openImageModal('{{ asset('storage/' . $gambar->path_gambar) }}', '{{ $project->judul }}')">
                                <div class="relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $gambar->path_gambar) }}" 
                                         alt="{{ $project->judul }}" 
                                         class="project-image w-full h-64 object-cover">
                                    
                                    <!-- Overlay -->
                                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div class="text-center text-white">
                                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                            </svg>
                                            <p class="font-semibold">Click to Enlarge</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <!-- No Images Placeholder -->
            <div class="text-center py-16">
                <div class="bg-white/10 rounded-2xl p-12 border border-white/20 max-w-md mx-auto">
                    <svg class="w-24 h-24 mx-auto mb-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-white mb-4">No Images Available</h3>
                    <p class="text-white/70">
                        Images for this project are not available at the moment.
                    </p>
                </div>
            </div>
        @endif

        <!-- Project Info -->
        <div class="bg-white/10 rounded-2xl p-8 border border-white/20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">Project Information</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-white/80">
                            <svg class="w-5 h-5 mr-3 text-[#F9B654]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $project->gambar->count() }} Images</span>
                        </div>
                        <div class="flex items-center text-white/80">
                            <svg class="w-5 h-5 mr-3 text-[#F9B654]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Project ID: {{ $project->id_projek }}</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">Get In Touch</h3>
                    <p class="text-white/80 mb-4">
                        Interested in this project or want to collaborate? Let's discuss how we can work together!
                    </p>
                    <a href="#" class="inline-block px-6 py-3 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 items-center justify-center p-4" style="display: none;">
        <div class="relative max-w-4xl max-h-full">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-[#F9B654] transition-colors duration-300 z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="modalImage" src="" alt="" class="max-w-full max-h-full rounded-lg">
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#4599b3]/90 mt-16 py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="text-white/80">
                © 2024 Cakra Astra Zen. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        function openImageModal(imageSrc, imageAlt) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            
            modalImage.src = imageSrc;
            modalImage.alt = imageAlt;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });
    </script>
</body>

</html>
