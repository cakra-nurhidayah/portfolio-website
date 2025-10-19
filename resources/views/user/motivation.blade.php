{{-- resources/views/motivation.blade.php --}}
  <div
  class="w-full h-[500px] bg-cover bg-center flex items-center justify-center relative overflow-hidden"
  style="background-image: url('{{ asset('images/bg3.png') }}')"
>
  <!-- Overlay untuk efek gelap -->
  <div class="absolute inset-0 bg-black/30"></div>
  
  <!-- Gradient overlay untuk efek yang lebih menarik -->
  <div class="absolute inset-0 bg-gradient-to-r from-[#4599b3]/20 via-transparent to-[#F9B654]/20"></div>
  
  <!-- Floating particles effect -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="floating-particle particle-1"></div>
    <div class="floating-particle particle-2"></div>
    <div class="floating-particle particle-3"></div>
    <div class="floating-particle particle-4"></div>
    <div class="floating-particle particle-5"></div>
  </div>

  <div class="text-center px-4 relative z-10">
    <!-- Container untuk text dengan efek glassmorphism -->
    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-2xl">
      <div class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6 h-16 flex items-center justify-center">
        <span id="typing-motivation" class="gradient-text-motivation"></span>
        <span id="cursor" class="cursor-blink text-[#F9B654] ml-1">|</span>
      </div>
      
      <!-- Progress indicator -->
      <div class="flex justify-center space-x-2 mt-4">
        <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300" id="dot-0"></div>
        <div class="w-2 h-2 rounded-full bg-white/30 transition-all duration-300" id="dot-1"></div>
      </div>
    </div>
  </div>
</div>

<style>
  .gradient-text-motivation {
    background: linear-gradient(135deg, #ffffff, #F9B654, #FFD580, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 200% 200%;
    animation: gradient-shift 3s ease-in-out infinite;
  }

  @keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
  }

  .cursor-blink {
    animation: blink 1s infinite;
  }

  @keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0; }
  }

  .floating-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: linear-gradient(45deg, #F9B654, #FFD580);
    border-radius: 50%;
    opacity: 0.6;
    animation: float 6s ease-in-out infinite;
  }

  .particle-1 {
    top: 20%;
    left: 10%;
    animation-delay: 0s;
    animation-duration: 8s;
  }

  .particle-2 {
    top: 60%;
    left: 80%;
    animation-delay: 2s;
    animation-duration: 6s;
  }

  .particle-3 {
    top: 30%;
    left: 70%;
    animation-delay: 4s;
    animation-duration: 7s;
  }

  .particle-4 {
    top: 80%;
    left: 20%;
    animation-delay: 1s;
    animation-duration: 9s;
  }

  .particle-5 {
    top: 10%;
    left: 50%;
    animation-delay: 3s;
    animation-duration: 5s;
  }

  @keyframes float {
    0%, 100% {
      transform: translateY(0px) translateX(0px);
      opacity: 0.6;
    }
    25% {
      transform: translateY(-20px) translateX(10px);
      opacity: 0.8;
    }
    50% {
      transform: translateY(-10px) translateX(-5px);
      opacity: 0.4;
    }
    75% {
      transform: translateY(-30px) translateX(15px);
      opacity: 0.7;
    }
  }

  /* Smooth transition untuk text change */
  .text-transition {
    transition: all 0.5s ease-in-out;
  }

  .fade-in {
    animation: fadeIn 0.8s ease-in-out;
  }

  .fade-out {
    animation: fadeOut 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes fadeOut {
    from {
      opacity: 1;
      transform: translateY(0);
    }
    to {
      opacity: 0;
      transform: translateY(-20px);
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const texts = [
      'Growing Every Day, Creating Without Limits.',
      'Growing Every Day, Creating Without Limits.'
    ];
    const el = document.getElementById('typing-motivation');
    const cursor = document.getElementById('cursor');
    let index = 0;
    let charIndex = 0;
    let isTyping = true;
    const typeSpeed = 80;
    const eraseSpeed = 40;
    const delayBetween = 2000;
    const pauseBetween = 1000;

    // Update progress dots
    function updateDots(currentIndex) {
      document.querySelectorAll('[id^="dot-"]').forEach((dot, i) => {
        if (i === currentIndex) {
          dot.classList.remove('bg-white/30');
          dot.classList.add('bg-[#F9B654]', 'scale-125');
        } else {
          dot.classList.remove('bg-[#F9B654]', 'scale-125');
          dot.classList.add('bg-white/30');
        }
      });
    }

    function type() {
      if (charIndex < texts[index].length) {
        el.textContent += texts[index].charAt(charIndex);
        charIndex++;
        setTimeout(type, typeSpeed);
      } else {
        // Selesai typing, pause sebentar
        setTimeout(() => {
          isTyping = false;
          setTimeout(erase, pauseBetween);
        }, delayBetween);
      }
    }

    function erase() {
      if (charIndex > 0) {
        el.textContent = texts[index].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, eraseSpeed);
      } else {
        // Selesai erase, ganti ke text berikutnya
        index = (index + 1) % texts.length;
        isTyping = true;
        updateDots(index);
        
        // Tambahkan efek fade
        el.classList.add('fade-out');
        setTimeout(() => {
          el.classList.remove('fade-out');
          el.classList.add('fade-in');
          setTimeout(() => {
            el.classList.remove('fade-in');
            setTimeout(type, 300);
          }, 100);
        }, 200);
      }
    }

    // Hide cursor saat erase
    function toggleCursor() {
      if (isTyping) {
        cursor.style.opacity = '1';
      } else {
        cursor.style.opacity = '0.3';
      }
    }

    // Update cursor visibility
    setInterval(toggleCursor, 100);

    // Initialize
    updateDots(0);
    setTimeout(type, 800);
  });
</script>