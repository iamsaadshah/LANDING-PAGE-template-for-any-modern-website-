<section class="relative py-10 overflow-hidden ">
  <!-- CTA container -->
  <div class="container mx-auto px-6 md:px-12 ">
    <div
      class="bg-gradient-to-r from-pink-100 via-red-200 to-pink-100 backdrop-blur-lg border border-white/20 rounded-3xl p-12 text-center  hover:shadow-xl transition-shadow duration-500">
      <h2 class="text-4xl md:text-5xl font-bold text-red-600 mb-6">Ready to Take Your Brand to the Next Level?</h2>
      <p class="text-gray-600 text-lg mb-8">Join hundreds of businesses already leveraging futuristic digital solutions
        to grow faster.</p>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row justify-center gap-6">
        <button
          class="relative overflow-hidden rounded-full border border-[#F7B2B0] px-5 py-2.5 text-[18px] font-medium text-white bg-[#EB433D] cursor-pointer transition-all duration-300 ease-in-out group">
          <span
            class="absolute left-0 bottom-[-100%] w-full h-full bg-[#f7f7f7]  rounded-full transition-all duration-300 ease-in-out group-hover:bottom-0 group-hover:rounded-none"></span>
          <span class="relative z-10 transition-colors duration-300 ease-in-out group-hover:text-[#EB433D]">Get
            Started</span>
        </button>
        <button
          class="relative overflow-hidden rounded-full border border-[#F7B2B0] px-5 py-2.5 text-[18px] font-medium text-[#eb433d] bg-[#f7f7f7] cursor-pointer transition-all duration-300 ease-in-out group">
          <span
            class="absolute left-0 bottom-[-100%] w-full h-full bg-[#EB433D] rounded-full transition-all duration-300 ease-in-out group-hover:bottom-0 group-hover:rounded-none"></span>
          <span class="relative z-10 transition-colors duration-300 ease-in-out group-hover:text-white">Know More</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Neon floating particles (5 total, red accents) -->
  <div class="absolute top-7 left-1/4 w-3 h-3 bg-red-500 rounded-full opacity-50 animate-bounce-slow"></div>
  <div class="absolute bottom-10 right-1/3 w-4 h-4 bg-red-200 rounded-full opacity-50 animate-bounce-slower"></div>
  <div class="absolute top-12 right-1/4 w-2 h-2 bg-red-300 rounded-full opacity-50 animate-bounce-slow"></div>
  <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-red-500 rounded-full opacity-60 animate-bounce-slower"></div>
  <div class="absolute top-1/2 right-1/2 w-2.5 h-2.5 bg-red-300 rounded-full opacity-70 animate-bounce-slow"></div>


</section>

<style>
  /* Custom slow bounce animation for neon particles */
  @keyframes bounce-slow {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-20px);
    }
  }

  @keyframes bounce-slower {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-15px);
    }
  }

  .animate-bounce-slow {
    animation: bounce-slow 4s infinite ease-in-out;
  }

  .animate-bounce-slower {
    animation: bounce-slower 6s infinite ease-in-out;
  }
</style>