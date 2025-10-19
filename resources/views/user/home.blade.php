<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Cakra Portfolio</title>
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

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Fade in up animation */
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .animate-fade-in-up.delay-200 {
            animation-delay: 0.2s;
        }

        .animate-fade-in-up.delay-400 {
            animation-delay: 0.4s;
        }

        .animate-fade-in-up.delay-600 {
            animation-delay: 0.6s;
        }

        .animate-fade-in-up.delay-800 {
            animation-delay: 0.8s;
        }

        .animate-fade-in-up.delay-1000 {
            animation-delay: 1.0s;
        }

        .animate-fade-in-up.delay-1200 {
            animation-delay: 1.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom shadow */
        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }

        /* Smooth transitions for all elements */
        * {
            transition: all 0.3s ease;
        }

        .skill-bar {
            transition: width 1.5s ease-in-out;
        }

        .timeline-item {
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -20px;
            top: 0;
            width: 12px;
            height: 12px;
            background: linear-gradient(135deg, #F9B654, #FFD580);
            border-radius: 50%;
            border: 3px solid #4599b3;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: -14px;
            top: 12px;
            width: 2px;
            height: calc(100% + 20px);
            background: linear-gradient(to bottom, #F9B654, transparent);
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>

<body class="min-h-screen">


    {{-- INCLUDE NAVBAR VIEW DI SINI --}}
    @include('user.navbar')

    @php
    $projects = isset($projects) ? $projects : collect([]);
    @endphp

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 pt-20 pb-16">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-[#F9B654]/20 to-[#FFD580]/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-gradient-to-r from-[#4599b3]/20 to-[#2d5a87]/20 rounded-full blur-xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-gradient-to-r from-[#F9B654]/10 to-[#FFD580]/10 rounded-full blur-lg animate-pulse delay-500"></div>

        <div class="relative z-10 max-w-7xl mx-auto w-full">
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">

                <!-- Profile Image Section -->
                <div class="flex-shrink-0 order-2 lg:order-1">
                    <div class="relative group">
                        <!-- Main Image Container -->
                        <div class="relative w-64 h-64 lg:w-80 lg:h-80 xl:w-96 xl:h-96 rounded-full overflow-hidden border-4 border-white/30 shadow-2xl transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-3xl">
                            <img src="{{ asset('images/cakra1.png') }}" alt="Cakra Astra Zen" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#4599b3]/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Floating Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full animate-bounce delay-300 shadow-lg"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full animate-bounce delay-700 shadow-lg"></div>

                        <!-- Glow Effect -->
                        <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#F9B654]/30 to-[#FFD580]/30 blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                    </div>
                </div>

                <!-- Text Content Section -->
                <div class="flex-1 text-center lg:text-left order-1 lg:order-2 space-y-6 lg:space-y-8">
                    <!-- Greeting -->
                    <div class="space-y-2">
                        <h2 class="text-2xl lg:text-3xl tracking-wider text-white/90 font-light animate-fade-in-up">
                            Hey, I'm <span class="font-bold text-[#F9B654]">Cakra</span>
                        </h2>
                    </div>

                    <!-- Main Title -->
                    <div class="space-y-2">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-[#F9B654] leading-tight animate-fade-in-up delay-200">
                            Full-Stack
                        </h1>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight animate-fade-in-up delay-400">
                            Web Developer
                        </h1>
                    </div>

                    <!-- Typing Animation -->
                    <div class="h-10 lg:h-12 flex items-center justify-center lg:justify-start">
                        <span id="typing" class="text-xl lg:text-2xl text-white/90 border-r-2 border-[#F9B654] pr-2 animate-fade-in-up delay-600"></span>
                    </div>

                    <!-- Description -->
                    <p class="text-lg lg:text-xl text-white/80 max-w-2xl mx-auto lg:mx-0 leading-relaxed animate-fade-in-up delay-800">
                        Passionate developer creating innovative solutions with modern technologies.
                        Let's build something amazing together!
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-fade-in-up delay-1000">
                        <a href="#about" class="group relative px-8 py-4 bg-gradient-to-r from-[#0288D1] to-[#1976D2] text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform transition-all duration-300 hover:-translate-y-2 hover:scale-105 overflow-hidden">
                            <span class="relative z-10">About Me</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-[#1976D2] to-[#0288D1] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>

                        <a href="{{ route('projects') }}" class="group relative px-8 py-4 bg-white text-black font-bold rounded-xl shadow-lg hover:shadow-xl transform transition-all duration-300 hover:-translate-y-2 hover:scale-105 overflow-hidden">
                            <span class="relative z-10">Browse Projects</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-[#F9B654] to-[#FFD580] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </a>
                    </div>

                    <!-- Social Links Mini -->
                    <div class="flex justify-center lg:justify-start space-x-4 pt-4 animate-fade-in-up delay-1200">
                        <a href="https://www.linkedin.com/in/cakra-nurhidayah/" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="w-5 h-5 filter brightness-0 invert">
                        </a>
                        <a href="https://www.instagram.com/astra_zen1/" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-5 h-5 filter brightness-0 invert">
                        </a>
                        <a href="mailto:cakranurhidayah01@gmail.com" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-all duration-300 hover:scale-110">
                            <img src="{{ asset('images/mail.png') }}" alt="Email" class="w-5 h-5 filter brightness-0 invert">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- INCLUDE MOTIVATION VIEW DI SINI --}}
    @include('user.motivation')

    {{-- INCLUDE ABOUTME  VIEW DI SINI --}}
    <div class="container mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <div class="relative inline-block mb-8">
                <img src="{{ asset('images/astrazen.png') }}" alt="Cakra Astra Zen" class="w-32 h-32 rounded-full border-4 border-white shadow-2xl floating">
                <div class="absolute -top-2 -right-2 w-8 h-8 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full pulse-animation"></div>
            </div>
            <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-6 floating">
                About Me
            </h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Passionate Web Developer • Creative Problem Solver • Continuous Learner
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- About Text -->
            <div class="bg-white/10 rounded-2xl p-8 border border-white/20 card-hover">
                <h2 class="text-3xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-[#F9B654]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                    Who I Am
                </h2>
                <div class="space-y-4 text-white/90 leading-relaxed">
                    <p class="text-lg">
                        Hi! I'm <span class="text-[#F9B654] font-semibold">Cakra Nurhidayah</span>, a web developer who's passionate about details, challenges, and continuous learning.
                    </p>
                    <p class="text-lg">
                        With a background in Software Engineering, I build websites that are not only functional but also visually appealing and user friendly.
                    </p>
                    <p class="text-lg">
                        I believe technology is a tool to create something meaningful starting from small things done wholeheartedly.
                    </p>
                    <p class="text-lg">
                        Through <span class="text-[#F9B654] font-semibold">Astra_zen</span>, I shape a digital identity that reflects quality, creativity, and sincerity in every project I work on.
                    </p>
                </div>
            </div>

            <!-- Skills & Expertise -->
            <div class="bg-white/10 rounded-2xl p-8 border border-white/20 card-hover">
                <h2 class="text-3xl font-bold text-white mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-[#F9B654]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                    </svg>
                    Core Values
                </h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Attention to Detail</h3>
                            <p class="text-white/80">Every pixel, every line of code matters. I ensure perfection in every aspect of my work.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Problem Solving</h3>
                            <p class="text-white/80">I love tackling complex challenges and finding innovative solutions.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Continuous Learning</h3>
                            <p class="text-white/80">Technology evolves rapidly, and I evolve with it through constant learning and adaptation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Journey Timeline -->
        <div class="bg-white/10 rounded-2xl p-8 border border-white/20 mb-16">
            <h2 class="text-3xl font-bold text-white mb-8 text-center flex items-center justify-center">
                <svg class="w-8 h-8 mr-3 text-[#F9B654]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                My Journey
            </h2>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-8">
                    <div class="timeline-item pl-8">
                        <div class="bg-white/5 rounded-xl p-6 border border-white/10">
                            <h3 class="text-xl font-bold text-[#F9B654] mb-2">Software Engineering Education</h3>
                            <p class="text-white/80">Built a strong foundation in computer science, programming principles, and software development methodologies.</p>
                        </div>
                    </div>

                    <div class="timeline-item pl-8">
                        <div class="bg-white/5 rounded-xl p-6 border border-white/10">
                            <h3 class="text-xl font-bold text-[#F9B654] mb-2">Web Development Focus</h3>
                            <p class="text-white/80">Specialized in creating responsive, user-friendly websites with modern technologies and best practices.</p>
                        </div>
                    </div>

                    <div class="timeline-item pl-8">
                        <div class="bg-white/5 rounded-xl p-6 border border-white/10">
                            <h3 class="text-xl font-bold text-[#F9B654] mb-2">Astra_zen Brand</h3>
                            <p class="text-white/80">Established a personal brand that represents quality, creativity, and sincerity in every digital project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center bg-white/10 rounded-2xl p-12 border border-white/20">
            <h2 class="text-3xl font-bold text-white mb-4">Let's Create Something Amazing Together</h2>
            <p class="text-white/80 mb-8 max-w-2xl mx-auto">
                I'm always excited to take on new challenges and collaborate on meaningful projects. Let's discuss how we can bring your ideas to life!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('projects') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300">
                    View My Projects
                </a>
                <a href="#" class="inline-block px-8 py-4 border-2 border-[#F9B654] text-[#F9B654] font-bold rounded-xl hover:bg-[#F9B654] hover:text-black transition-all duration-300">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>

    {{-- INCLUDE SKILLS  VIEW DI SINI --}}
    @include('user.skills')

    {{-- INCLUDE service  VIEW DI SINI --}}
    @include('user.service')

    {{-- INCLUDE project  VIEW DI SINI --}}
    <section class="bg-[#4599b3] py-16">
        <div class="max-w-6xl mx-auto px-8">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h2 class="text-5xl md:text-6xl font-bold gradient-text mb-6 floating">
                    Featured Projects
                </h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Showcasing My Latest Work • Creative Solutions • Innovative Designs
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-white/10 rounded-2xl p-8 border border-white/20 card-hover group">
                    <!-- Project Image -->
                    <div class="w-32 h-32 mx-auto mb-6 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 overflow-hidden">
                        @php
                        $firstImage = $project->gambar->first();
                        $imgSrc = $firstImage ? asset('storage/' . $firstImage->url) : asset('images/skill1.png');
                        $imgAlt = $firstImage && $firstImage->caption ? $firstImage->caption : $project->judul;
                        @endphp
                        <img src="{{ $imgSrc }}" alt="{{ $imgAlt }}" class="w-24 h-24 object-cover rounded-full">
                    </div>

                    <!-- Project Content -->
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-[#F9B654] transition-colors duration-300">
                            {{ $project->judul }}
                        </h3>
                        @if(!empty($project->deskripsi))
                        <p class="text-white/80 leading-relaxed text-base mb-6">
                            {{ \Illuminate\Support\Str::limit(strip_tags($project->deskripsi), 120) }}
                        </p>
                        @endif

                        <!-- Action Button -->
                        <div class="flex justify-center">
                            <a href="{{ route('project.detail', $project->id_projek) }}" class="px-6 py-2 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300 text-sm">
                                View Project
                            </a>
                        </div>
                    </div>

                    <!-- Decorative Element -->
                    <div class="mt-6 flex justify-center">
                        <div class="w-12 h-1 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Call to Action Section -->
            <div class="mt-16 text-center bg-white/10 rounded-2xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold text-white mb-4">Want to See More Projects?</h3>
                <p class="text-white/80 mb-6 max-w-2xl mx-auto leading-relaxed">
                    Explore my complete portfolio and discover more innovative solutions I've created.
                </p>
                <a href="{{ route('projects') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300">
                    View All Projects
                </a>
            </div>
        </div>
    </section>



    {{-- INCLUDE service  VIEW DI SINI --}}
    @include('user.footer')


    <!-- Typing Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Typing Animation
            const texts = ['Im Programmer', 'Im Web Developer', 'Im Technology Enthusiast'];
            const el = document.getElementById('typing');
            let index = 0;
            let charIndex = 0;
            const typeSpeed = 100;
            const eraseSpeed = 50;
            const delayBetween = 800;

            function type() {
                if (charIndex < texts[index].length) {
                    el.textContent += texts[index].charAt(charIndex);
                    charIndex++;
                    setTimeout(type, typeSpeed);
                } else {
                    setTimeout(erase, delayBetween);
                }
            }

            function erase() {
                if (charIndex > 0) {
                    el.textContent = texts[index].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(erase, eraseSpeed);
                } else {
                    index = (index + 1) % texts.length;
                    setTimeout(type, typeSpeed);
                }
            }

            // Start typing animation
            setTimeout(type, delayBetween / 2);

            // Scroll Animations for About Me Section
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

            // Observe all cards
            document.querySelectorAll('.card-hover').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Animate timeline items
            document.querySelectorAll('.timeline-item').forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-30px)';
                item.style.transition = `opacity 0.6s ease ${index * 0.2}s, transform 0.6s ease ${index * 0.2}s`;
                observer.observe(item);
            });
        });
    </script>
</body>

</html>