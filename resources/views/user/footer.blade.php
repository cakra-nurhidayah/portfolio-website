<footer class="relative mt-16 overflow-hidden">
  <!-- Background dengan gradient yang menarik -->
  <div class="absolute inset-0 bg-gradient-to-br from-[#4599b3] via-[#2d5a87] to-[#1a3a5c]"></div>

  <!-- Pattern overlay -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 20px 20px;"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-6xl mx-auto px-8 py-16">
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

      <!-- About Section -->
      <div class="text-center md:text-left">
        <h3 class="text-2xl font-bold text-white mb-4 flex items-center justify-center md:justify-start">
          <span class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-3">
            <i class="fas fa-user text-white text-sm"></i>
          </span>
          About Me
        </h3>
        <p class="text-white/80 leading-relaxed">
          Passionate developer creating innovative solutions with modern technologies.
          Let's build something amazing together!
        </p>
      </div>

      <!-- Quick Links -->
      <div class="text-center">
        <h3 class="text-2xl font-bold text-white mb-6 flex items-center justify-center">
          <span class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-3">
            <i class="fas fa-link text-white text-sm"></i>
          </span>
          Quick Links
        </h3>
        <div class="space-y-3">
          <a href="{{ route('home') }}" class="block text-white/80 hover:text-white transition-colors duration-300 hover:translate-x-1 transform">Home</a>
          <a href="{{ route('about') }}" class="block text-white/80 hover:text-white transition-colors duration-300 hover:translate-x-1 transform">About</a>
          <a href="{{ route('projects') }}" class="block text-white/80 hover:text-white transition-colors duration-300 hover:translate-x-1 transform">Projects</a>
          <a href="{{ route('contact') }}" class="block text-white/80 hover:text-white transition-colors duration-300 hover:translate-x-1 transform">Contact</a>
        </div>
      </div>


      <!-- Social Media -->
      <div class="text-center md:text-right">
        <h3 class="text-2xl font-bold text-white mb-6 flex items-center justify-center md:justify-end">
          <span class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center mr-3">
            <i class="fas fa-share-alt text-white text-sm"></i>
          </span>
          Connect With Me
        </h3>
        <div class="flex justify-center md:justify-end space-x-6">
          <!-- X (Twitter) -->
          <a href="https://x.com/YourUsername" target="_blank"
            class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-black/80 transition-all duration-300 hover:scale-110 hover:rotate-3">
            <img src="{{ asset('images/X3.png') }}" alt="LinkedIn" class="w-6 h-6 filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
            <div class="absolute -top-2 -right-2 w-3 h-3 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </a>

          <!-- Instagram -->
          <a href="https://www.instagram.com/astra_zen1/" target="_blank"
            class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-gradient-to-r hover:from-pink-500 hover:to-purple-600 transition-all duration-300 hover:scale-110 hover:rotate-3">
            <img src="{{ asset('images/instagram.png') }}" alt="LinkedIn" class="w-6 h-6 filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
            <div class="absolute -top-2 -right-2 w-3 h-3 bg-pink-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </a>

          <!-- LinkedIn -->
          <a href="https://www.linkedin.com/in/cakra-nurhidayah/" target="_blank"
            class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-blue-600 transition-all duration-300 hover:scale-110 hover:rotate-3">
            <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="w-6 h-6 filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
            <div class="absolute -top-2 -right-2 w-3 h-3 bg-blue-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </a>

          <!-- Gmail -->
          <a href="mailto: cakranurhidayah01@gmail.com"
            class="group relative w-12 h-12 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-red-600 transition-all duration-300 hover:scale-110 hover:rotate-3">
            <img src="{{ asset('images/mail.png') }}" alt="Email" class="w-6 h-6 filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
            <div class="absolute -top-2 -right-2 w-3 h-3 bg-red-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </a>

        </div>



      </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-white/20 mb-8"></div>

    <!-- Bottom Section -->
    <div class="text-center">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <p class="text-white/80 mb-4 md:mb-0">
          © 2025 <span class="font-semibold text-white">Cakra Astra Zen</span>. All rights reserved.
        </p>

        <!-- Additional Links -->
        <div class="flex space-x-6 text-sm">
          <a href="#" class="text-white/80 hover:text-white transition-colors duration-300">Privacy Policy</a>
          <a href="#" class="text-white/80 hover:text-white transition-colors duration-300">Terms of Service</a>

        </div>
      </div>

      <!-- Made with love -->
      <div class="mt-4 text-white/60 text-sm flex items-center justify-center gap-x-2">
        <span>Made with</span>
        <span>Laravel | Tailwind CSS | JavaScript</span>
      </div>

    </div>
  </div>

  <!-- Decorative elements -->
  <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>
  <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>
</footer>

<!-- Floating back to top button -->
<button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-[#4599b3] to-[#2d5a87] text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 invisible hover:scale-110 z-50">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
  // Back to top functionality
  window.addEventListener('scroll', function() {
    const backToTop = document.getElementById('backToTop');
    if (window.pageYOffset > 300) {
      backToTop.classList.remove('opacity-0', 'invisible');
      backToTop.classList.add('opacity-100', 'visible');
    } else {
      backToTop.classList.add('opacity-0', 'invisible');
      backToTop.classList.remove('opacity-100', 'visible');
    }
  });

  document.getElementById('backToTop').addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>