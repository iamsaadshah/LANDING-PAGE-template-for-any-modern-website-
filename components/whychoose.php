<section id="why-choose-us" class="relative py-10 overflow-hidden">
  <div class="container mx-auto px-6 md:px-12">
    <!-- Title -->
    <h2 class="text-4xl md:text-5xl font-bold text-center text-red-600 mb-16">
      Why Choose Us?
    </h2>

    <!-- Timeline wrapper -->
    <div class="relative">
      <!-- Central line -->
      <div
        class="absolute top-0 left-1/2 transform -translate-x-1/2 h-full w-[3px] bg-gradient-to-b from-red-600 via-red-600/40 to-transparent">
      </div>

      <!-- Item 1 -->
      <div class="relative flex flex-col md:flex-row items-center mb-16 group">
        <div class="md:w-1/2 md:pr-12 text-center md:text-right mb-6 md:mb-0 relative">
          <div
            class="bg-white/5 backdrop-blur-lg rounded-2xl p-6 shadow-lg group-hover:shadow-red-600/50 transition relative z-10">
            <h3 class="text-2xl font-bold text-red-600 mb-3">Strategic</h3>
            <p class="text-red-800 leading-relaxed">
              We help businesses define goals, allocate resources, and make data-driven decisions to maximize results.
              Our strategic approach ensures alignment and adaptability in a competitive environment.
            </p>
          </div>
          <div
            class="hidden md:block absolute top-1/2 right-0 w-12 h-[2px] bg-gradient-to-r from-red-600 to-transparent arrow-right">
          </div>
        </div>
        <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start relative">
          <img src="assets/gif/strategy.gif" alt="Strategic approach illustration"
            class="w-28 h-28 rounded-2xl shadow-xl object-cover relative z-10" />
        </div>
      </div>

      <!-- Item 2 -->
      <div class="relative flex flex-col md:flex-row-reverse items-center mb-16 group">
        <div class="md:w-1/2 md:pl-12 text-center md:text-left mb-6 md:mb-0 relative">
          <div
            class="bg-white/5 backdrop-blur-lg rounded-2xl p-6 shadow-lg group-hover:shadow-red-600/50 transition relative z-10">
            <h3 class="text-2xl font-bold text-red-600 mb-3">Measurable</h3>
            <p class="text-red-800 leading-relaxed">
              Our services are trackable and measurable. We monitor key metrics such as engagement, conversions, and
              ROI to continuously optimize strategies for success.
            </p>
          </div>
          <div
            class="hidden md:block absolute top-1/2 left-0 w-12 h-[2px] bg-gradient-to-l from-red-600 to-transparent arrow-left">
          </div>
        </div>
        <div class="md:w-1/2 md:pr-12 flex justify-center md:justify-end relative">
          <img src="assets/gif/trackable.gif" alt="Measurable results illustration"
            class="w-28 h-28 rounded-2xl shadow-xl object-cover relative z-10" />
        </div>
      </div>

      <!-- Item 3 -->
      <div class="relative flex flex-col md:flex-row items-center mb-16 group">
        <div class="md:w-1/2 md:pr-12 text-center md:text-right mb-6 md:mb-0 relative">
          <div
            class="bg-white/5 backdrop-blur-lg rounded-2xl p-6 shadow-lg group-hover:shadow-red-600/50 transition relative z-10">
            <h3 class="text-2xl font-bold text-red-600 mb-3">Sustainable</h3>
            <p class="text-red-800 leading-relaxed">
              We focus on long-term growth and sustainability. Our solutions combine strategic planning, innovation,
              and resource management to help clients thrive over time.
            </p>
          </div>
          <div
            class="hidden md:block absolute top-1/2 right-0 w-12 h-[2px] bg-gradient-to-r from-red-600 to-transparent arrow-right">
          </div>
        </div>
        <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start relative">
          <img src="assets/gif/sustainable.gif" alt="Sustainable growth illustration"
            class="w-28 h-28 rounded-2xl shadow-xl object-cover relative z-10" />
        </div>
      </div>
    </div>
  </div>

  <!-- Floating Dots -->
  <div class="absolute top-7 left-[12%] w-3 h-3 bg-red-600 rounded-full opacity-60 animate-bounce-slow"></div>
  <div class="absolute bottom-10 right-[78%] w-4 h-4 bg-red-600/70 rounded-full opacity-60 animate-bounce-slower"></div>
  <div class="absolute top-12 right-[5%] w-2 h-2 bg-red-600/50 rounded-full opacity-70 animate-bounce-slow"></div>
  <div class="absolute bottom-1/4 left-[70%] w-3 h-3 bg-red-600 rounded-full opacity-70 animate-bounce-slower"></div>
  <div class="absolute top-1/2 right-[30%] w-2.5 h-2.5 bg-red-600/60 rounded-full opacity-80 animate-bounce-slow"></div>
</section>

<!-- Arrow CSS -->
<style>
  .arrow-right::after,
  .arrow-left::after {
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 12px;
    height: 12px;
    background-color: #DC2626;
    /* generic red */
    border-radius: 50%;
    box-shadow: 0 0 8px rgba(220, 38, 38, 0.5);
  }

  .arrow-right::after {
    right: -6px;
  }

  .arrow-left::after {
    left: -6px;
  }
</style>

<!-- GSAP Animations -->
<script>
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray("#why-choose-us .group").forEach((item) => {
    const card = item.querySelector("div > div");
    const img = item.querySelector("img");

    gsap.from(card, {
      opacity: 0,
      y: 60,
      duration: 1.2,
      ease: "power3.out",
      scrollTrigger: {
        trigger: item,
        start: "top 85%",
        toggleActions: "play none none reverse"
      }
    });

    gsap.from(img, {
      opacity: 0,
      y: 40,
      duration: 1.2,
      ease: "power3.out",
      delay: 0.2,
      scrollTrigger: {
        trigger: item,
        start: "top 85%",
        toggleActions: "play none none reverse"
      }
    });
  });

  // Glow pulse for center line
  gsap.to("#why-choose-us .w-\\[3px\\]", {
    boxShadow: "0 0 20px #DC2626",
    repeat: -1,
    yoyo: true,
    duration: 1.5,
    ease: "power1.inOut"
  });
</script>