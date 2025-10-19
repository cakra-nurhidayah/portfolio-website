<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Cakra Portfolio</title>
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

        /* Untuk mengganti warna background: ubah kode di baris berikut */
        body {
            background-color: #4599b3;
        }

        .project-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .project-image {
            transition: all 0.3s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #F9B654, #FFD580, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
    {{-- INCLUDE NAVBAR VIEW DI SINI --}}
    @include('user.navbar')
    
    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-6 floating">
                My Projects
            </h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
                Explore my collection of creative projects and innovative solutions. Each project represents a journey of learning and growth.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @forelse($projects as $project)
                <div class="project-card bg-white/10 rounded-2xl overflow-hidden shadow-xl border border-white/20 group cursor-pointer" 
                     onclick="viewProject({{ $project->id_projek }})">
                    
                    <!-- Project Image -->
                    <div class="relative h-64 overflow-hidden">
                        @if($project->gambar->count() > 0)
                            <img src="{{ asset('storage/' . $project->gambar->first()->path_gambar) }}" 
                                 alt="{{ $project->judul }}" 
                                 class="project-image w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#F9B654] to-[#FFD580] flex items-center justify-center">
                                <div class="text-center text-white">
                                    <svg class="w-16 h-16 mx-auto mb-4 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="text-sm font-medium">No Image</p>
                                </div>
                            </div>
                        @endif
                        
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="text-center text-white">
                                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                <p class="font-semibold">View Details</p>
                            </div>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3 group-hover:text-[#F9B654] transition-colors duration-300">
                            {{ $project->judul }}
                        </h3>
                        <p class="text-white/80 text-sm leading-relaxed line-clamp-3">
                            {{ Str::limit($project->deskripsi, 120) }}
                        </p>
                        
                        <!-- Project Stats -->
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-white/20">
                            <div class="flex items-center text-white/70 text-sm">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $project->gambar->count() }} Images
                            </div>
                            <div class="text-[#F9B654] font-semibold text-sm">
                                View Project →
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="bg-white/10 rounded-2xl p-12 border border-white/20">
                        <svg class="w-24 h-24 mx-auto mb-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-white mb-4">No Projects Yet</h3>
                        <p class="text-white/70 max-w-md mx-auto">
                            I'm currently working on some amazing projects. Check back soon to see my latest work!
                        </p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Call to Action -->
        <div class="text-center bg-white/10 rounded-2xl p-12 border border-white/20">
            <h2 class="text-3xl font-bold text-white mb-4">Interested in Working Together?</h2>
            <p class="text-white/80 mb-8 max-w-2xl mx-auto">
                I'm always excited to take on new challenges and create something amazing. Let's discuss your next project!
            </p>
            <a href="#" class="inline-block px-8 py-4 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300">
                Get In Touch
            </a>
        </div>
    </div>

       <!-- footer -->
       @include('user.footer')


    <script>
        function viewProject(projectId) {
            // Redirect to project detail page
            window.location.href = `/project/${projectId}`;
        }

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all project cards
            document.querySelectorAll('.project-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>

</html>