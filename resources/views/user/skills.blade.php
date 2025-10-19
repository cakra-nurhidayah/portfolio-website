{{-- resources/views/user/skills.blade.php --}}
<section class="bg-[#4599b3] py-16">
  <div class="max-w-6xl mx-auto px-8">
    <!-- Header Section -->
    <div class="text-center mb-16">
      <h2 class="text-5xl md:text-6xl font-bold gradient-text mb-6 floating">
        My Skills
      </h2>
      <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
        Technologies & Tools I Master • Continuous Learning • Always Growing
      </p>
    </div>

    <!-- Skills Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($skills as $skill)
      <div class="bg-white/10 rounded-2xl p-8 border border-white/20 card-hover group">
        <!-- Skill Icon -->
        <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
          @php
            $imgSrc = $skill->url ? (\Illuminate\Support\Str::startsWith($skill->url, ['http://', 'https://', '/storage/']) ? $skill->url : asset('storage/' . ltrim($skill->url, '/'))) : asset('images/skill1.png');
          @endphp
          <img src="{{ $imgSrc }}" alt="{{ $skill->caption ?? $skill->judul }}" class="w-16 h-16 object-cover rounded-full">
        </div>
        
        <!-- Skill Content -->
        <div class="text-center">
          <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-[#F9B654] transition-colors duration-300">
            {{ $skill->judul }}
          </h3>
          <p class="text-white/80 leading-relaxed text-base">
            {{ strip_tags($skill->deskripsi) }}
          </p>
        </div>

        <!-- Decorative Element -->
        <div class="mt-6 flex justify-center">
          <div class="w-12 h-1 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
      </div>
      @endforeach
    </div>


   
  </div>
</section>

<style>
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
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
  }
</style>
