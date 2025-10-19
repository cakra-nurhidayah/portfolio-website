<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Cakra Portfolio</title>
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

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
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
    <!-- Navbar -->
    @include('user.navbar')

    <!-- Hero Section -->
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

    <!-- footer -->
    @include('user.footer')
    

 

    <script>
        // Add scroll animations
        document.addEventListener('DOMContentLoaded', function() {
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