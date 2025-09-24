<footer class="bg-[#fff5f5] gray-300 pt-16 pb-8 relative overflow-hidden">
  <!-- Optional floating gradient shapes -->
  <!-- <div
    class="absolute -top-24 -left-24 w-64 h-64 bg-gradient-to-r from-purple-600 via-pink-500 to-blue-500 opacity-20 rounded-full blur-3xl animate-pulse-slow">
  </div>
  <div
    class="absolute -bottom-24 -right-24 w-64 h-64 bg-gradient-to-r from-green-400 via-teal-500 to-purple-500 opacity-20 rounded-full blur-3xl animate-pulse-slower">
  </div> -->

  <div class="container mx-auto px-6 md:px-12 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

      <!-- Logo + About -->
      <div>
        <img src="assets/logo-footer.png" alt="Logo" class="mb-4 w-24">
        <p class="text-[14px] leading-relaxed">
          A modern landing page template built with Tailwind CSS, GSAP animations, and PHP for form handling.
        </p>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-red-500 font-semibold mb-4 text-lg">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#services" class="hover:text-red-800 transition">Services</a></li>
          <li><a href="#about" class="hover:text-red-800 transition">About</a></li>
          <li><a href="#faq" class="hover:text-red-800 transition">FAQs</a></li>
          <li><a href="#contact" class="hover:text-red-800 transition">Contact</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h4 class="text-red-500 font-semibold mb-4 text-lg">Services</h4>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-red-800 transition">Web Development</a></li>
          <li><a href="#" class="hover:text-red-800 transition">UI/UX Design</a></li>
          <li><a href="#" class="hover:text-red-800 transition">Digital Marketing</a></li>
          <li><a href="#" class="hover:text-red-800 transition">Consulting</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h4 class="text-red-500 font-semibold mb-4 text-lg">Stay Connected</h4>
        <form class="flex">
          <input type="email" placeholder="Your email"
            class="px-3 py-2 w-full rounded-l-md focus:outline-none text-black">
          <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 rounded-r-md text-white transition">Go</button>
        </form>

        <!-- Social Icons -->
        <div class="flex gap-4 mt-5">
          <a href="#"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 hover:bg-blue-600 hover:text-white transition duration-300 shadow-sm">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 hover:bg-sky-500 hover:text-white transition duration-300 shadow-sm">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 hover:bg-gradient-to-tr hover:from-pink-500 hover:to-yellow-400 hover:text-white transition duration-300 shadow-sm">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-200 text-gray-600 hover:bg-blue-700 hover:text-white transition duration-300 shadow-sm">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 mt-12 pt-6 flex flex-col md:flex-row justify-between text-sm text-gray-400">
      <p>© 2025 iamsaadshah. All rights reserved.</p>
      <p>Designed with ❤️ by Saadshah</p>
    </div>
  </div>
</footer>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>
  /* Subtle floating background animations */
  @keyframes pulse-slow {

    0%,
    100% {
      transform: scale(1);
      opacity: 0.15;
    }

    50% {
      transform: scale(1.1);
      opacity: 0.25;
    }
  }

  @keyframes pulse-slower {

    0%,
    100% {
      transform: scale(1);
      opacity: 0.1;
    }

    50% {
      transform: scale(1.15);
      opacity: 0.2;
    }
  }

  .animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
  }

  .animate-pulse-slower {
    animation: pulse-slower 8s ease-in-out infinite;
  }
</style>