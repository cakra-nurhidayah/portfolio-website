<!-- Sticky Navbar -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out">
    <!-- Background dengan backdrop blur -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#4599b3]/95 via-[#4599b3]/90 to-[#4599b3]/95 backdrop-blur-md border-b border-white/20"></div>

    <!-- Navbar Content -->
    <div class="relative flex justify-between items-center px-6 lg:px-8 py-3 lg:py-4 max-w-7xl mx-auto">
        <!-- Logo Section -->
        <div class="flex items-center gap-3 group cursor-pointer">
            <div class="relative">
                <img src="{{ asset('images/astrazen.png') }}" alt="Cakra Astra Zen"
                    class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white/30 shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#F9B654] to-[#FFD580] opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
            </div>

            <div class="hidden sm:block">
                <span class="text-lg lg:text-2xl font-extrabold bg-gradient-to-r from-white via-[#F9B654] to-white bg-clip-text text-transparent tracking-wide drop-shadow-lg group-hover:animate-pulse transition-all duration-300">
                    Cakra <span class="mx-1 text-sm lg:text-lg font-light text-white/80">|</span> Astra<span class="text-[#F9B654] font-black">_zen</span>
                </span>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex gap-2 lg:gap-4 items-center">
            <li>
                <a href="{{ route('home') }}" 
                   class="nav-link {{ request()->routeIs('home') ? 'nav-active' : 'nav-inactive' }} px-4 lg:px-6 py-2 rounded-xl font-bold shadow-lg transition-all duration-300">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('projects') }}" 
                   class="nav-link {{ request()->routeIs('projects') ? 'nav-active' : 'nav-inactive' }} px-4 lg:px-6 py-2 rounded-xl font-semibold transition-all duration-300">
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="nav-link {{ request()->routeIs('about') ? 'nav-active' : 'nav-inactive' }} px-4 lg:px-6 py-2 rounded-xl font-semibold transition-all duration-300">
                    <span>About</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="nav-link {{ request()->routeIs('contact') ? 'nav-active' : 'nav-inactive' }} px-4 lg:px-6 py-2 rounded-xl font-semibold transition-all duration-300">
                    <span>Contact</span>
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex items-center justify-center rounded-lg bg-white/10 text-white hover:bg-white/20 transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden absolute top-full left-0 right-0 bg-gradient-to-b from-[#4599b3]/98 to-[#2d5a87]/98 backdrop-blur-md border-t border-white/20 transform -translate-y-full opacity-0 transition-all duration-300 ease-in-out">
        <div class="px-6 py-4 space-y-3">
            <a href="{{ route('home') }}" 
               class="block px-4 py-3 rounded-xl text-center font-bold transition-all duration-300 {{ request()->routeIs('home') ? 'bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black' : 'text-white hover:bg-white/20' }}">
               Home
            </a>
            <a href="{{ route('projects') }}" 
               class="block px-4 py-3 rounded-xl text-center font-semibold transition-all duration-300 {{ request()->routeIs('projects') ? 'bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black' : 'text-white hover:bg-white/20' }}">
               Projects
            </a>
            <a href="{{ route('about') }}" 
               class="block px-4 py-3 rounded-xl text-center font-semibold transition-all duration-300 {{ request()->routeIs('about') ? 'bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black' : 'text-white hover:bg-white/20' }}">
               About
            </a>
            <a href="{{ route('contact') }}" 
               class="block px-4 py-3 rounded-xl text-center font-semibold transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black' : 'text-white hover:bg-white/20' }}">
               Contact
            </a>
        </div>
    </div>

    <!-- Progress Bar -->
    <div class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-[#F9B654] to-[#FFD580] transition-all duration-300" id="progress-bar"></div>
</nav>

<!-- Navbar Spacer -->
<div class="h-16 lg:h-20"></div>

<style>
    /* Navbar Scroll Effects */
    .navbar-scrolled {
        background: rgba(69, 153, 179, 0.98);
        backdrop-filter: blur(20px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    /* Active Navigation State */
    .nav-active {
        background: linear-gradient(135deg, #F9B654, #FFD580);
        color: #000000;
        box-shadow: 0 4px 15px rgba(249, 182, 84, 0.3);
        transform: translateY(-1px);
    }

    .nav-active:hover {
        background: linear-gradient(135deg, #FFD580, #F9B654);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249, 182, 84, 0.4);
    }

    /* Inactive Navigation State */
    .nav-inactive {
        background: transparent;
        color: #ffffff;
        border: 1px solid transparent;
    }

    .nav-inactive:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #F9B654;
        border: 1px solid rgba(249, 182, 84, 0.3);
        transform: translateY(-1px);
    }

    /* Mobile Menu Animation */
    .mobile-menu-open {
        transform: translateY(0) !important;
        opacity: 1 !important;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Simple hover effects */
    .nav-link {
        position: relative;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .nav-link span {
        position: relative;
        z-index: 1;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const progressBar = document.getElementById('progress-bar');
        let isMobileMenuOpen = false;

        // Simple scroll effect for navbar
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;

            // Navbar background change on scroll
            if (scrollTop > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }

            // Update progress bar
            if (progressBar) {
                progressBar.style.width = scrollPercent + '%';
            }
        });

        // Mobile menu toggle - simplified
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                isMobileMenuOpen = !isMobileMenuOpen;
                
                if (isMobileMenuOpen) {
                    mobileMenu.classList.add('mobile-menu-open');
                    mobileMenuBtn.innerHTML = `
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    `;
                } else {
                    mobileMenu.classList.remove('mobile-menu-open');
                    mobileMenuBtn.innerHTML = `
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    `;
                }
            });

            // Close mobile menu when clicking on links
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('mobile-menu-open');
                    isMobileMenuOpen = false;
                    mobileMenuBtn.innerHTML = `
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    `;
                });
            });
        }

        // Smooth scroll only for contact link (anchor links)
        const contactLink = document.querySelector('a[href="#contact"]');
        if (contactLink) {
            contactLink.addEventListener('click', function(e) {
                e.preventDefault();
                const targetSection = document.querySelector('#contact');
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });
</script>