{{-- resources/views/user/service.blade.php --}}
<section class="bg-[#4599b3] py-16">
  <div class="max-w-6xl mx-auto px-8">
    <!-- Header Section -->
    <div class="text-center mb-16">
      <h2 class="text-5xl md:text-6xl font-bold gradient-text mb-6 floating">
        Services I Offer
      </h2>
      <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
        Professional Solutions • Quality Delivery • Client Satisfaction
      </p>
    </div>

    <!-- Services Grid -->
    <div class="space-y-8">
      @foreach($services as $service)
      <div class="bg-white/10 rounded-2xl p-8 border border-white/20 card-hover group">
        <div class="flex flex-col lg:flex-row items-center gap-8">
          <!-- Service Icon -->
          <div class="w-32 h-32 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 flex-shrink-0">
            @php
              $imgSrc = $service->url ? (\Illuminate\Support\Str::startsWith($service->url, ['http://', 'https://', '/storage/']) ? $service->url : asset('storage/' . ltrim($service->url, '/'))) : asset('images/service1.png');
            @endphp
            <img src="{{ $imgSrc }}" alt="{{ $service->caption ?? $service->judul }}" class="w-24 h-24 object-cover rounded-full">
          </div>
          
          <!-- Service Content -->
          <div class="flex-1 text-center lg:text-left">
            <h3 class="text-3xl font-bold text-white mb-4 group-hover:text-[#F9B654] transition-colors duration-300">
              {{ $service->judul }}
            </h3>
            <p class="text-white/80 leading-relaxed text-lg mb-6">
              {{ strip_tags($service->deskripsi) }}
            </p>
            
            <!-- Action Button -->
            <div class="flex justify-center lg:justify-start">
              <button class="px-8 py-3 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300 group-hover:shadow-xl">
                Get This Service
              </button>
            </div>
          </div>
        </div>

        <!-- Decorative Element -->
        <div class="mt-6 flex justify-center">
          <div class="w-16 h-1 bg-gradient-to-r from-[#F9B654] to-[#FFD580] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Call to Action Section -->
    <div class="mt-16 text-center bg-white/10 rounded-2xl p-12 border border-white/20">
      <h3 class="text-3xl font-bold text-white mb-4">Ready to Start Your Project?</h3>
      <p class="text-white/80 mb-8 max-w-3xl mx-auto leading-relaxed text-lg">
        Let's discuss your needs and create something amazing together. I'm committed to delivering quality solutions that exceed your expectations.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <button class="inline-block px-8 py-4 bg-gradient-to-r from-[#F9B654] to-[#FFD580] text-black font-bold rounded-xl shadow-lg hover:scale-105 hover:from-[#FFD580] hover:to-[#F9B654] transition-all duration-300">
          Contact Me Now
        </button>
        <button class="inline-block px-8 py-4 border-2 border-[#F9B654] text-[#F9B654] font-bold rounded-xl hover:bg-[#F9B654] hover:text-black transition-all duration-300">
          View My Portfolio
        </button>
      </div>
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
