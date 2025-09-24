<section id="whychoose" class="relative py-24 overflow-hidden">



  <div class="container mx-auto px-6 md:px-12">
    <h2 class="text-4xl md:text-5xl font-bold text-center text-[#EB433D] mb-16">Why Brand Make?</h2>
    <p class="text-[#992A2A] text-center max-w-3xl mx-auto mb-20">
      At Brand Make, we prioritize and believe in the spirit of business — STRATEGICAL, TRACKABLE, and SUSTAINABLE
      growth. Our team approaches each task creatively to deliver timely results.
    </p>

    <div class="grid grid-cols-1 gap-16">
      <!-- Card 1: Strategical -->
      <div class="relative flex flex-col md:flex-row items-center gap-8 whychoose-item">
        <div class="md:w-1/2 flex justify-center md:justify-end">
          <img src="assets/strategy.jpg" alt="Strategical" class="rounded-2xl shadow-2xl max-w-full w-72">
        </div>
        <div
          class="md:w-1/2 bg-[#FFEDED]/80 backdrop-blur-lg rounded-3xl p-8 hover:scale-105 transition-transform duration-500 shadow-lg">
          <h3 class="text-2xl font-bold text-[#EB433D] mb-4">Strategical</h3>
          <p class="text-[#992A2A] leading-relaxed">
            It helps businesses define goals, allocate resources, differentiate from competitors, and maximize ROI. A
            strategic approach aligns channels, enables data-driven decisions, and fosters adaptability in the
            ever-changing digital landscape.
          </p>
        </div>
      </div>

      <!-- Card 2: Trackable (alternate) -->
      <div class="relative flex flex-col md:flex-row-reverse items-center gap-8 whychoose-item">
        <div class="md:w-1/2 flex justify-center md:justify-start">
          <img src="assets/marketing.jpg" alt="Trackable" class="rounded-2xl shadow-2xl max-w-full w-72">
        </div>
        <div
          class="md:w-1/2 bg-[#FFEDED]/80 backdrop-blur-lg rounded-3xl p-8 hover:scale-105 transition-transform duration-500 shadow-lg">
          <h3 class="text-2xl font-bold text-[#EB433D] mb-4">Trackable</h3>
          <p class="text-[#992A2A] leading-relaxed">
            Digital marketing performance tracking measures effectiveness of efforts, informs decisions. Key metrics
            include website traffic, conversion rates, social media engagement, ROI. Regular monitoring helps optimize
            strategies and allocate resources efficiently.
          </p>
        </div>
      </div>

      <!-- Card 3: Sustainable -->
      <div class="relative flex flex-col md:flex-row items-center gap-8 whychoose-item">
        <div class="md:w-1/2 flex justify-center md:justify-end">
          <img src="assets/growth.jpg" alt="Sustainable" class="rounded-2xl shadow-2xl max-w-full w-72">
        </div>
        <div
          class="md:w-1/2 bg-[#FFEDED]/80 backdrop-blur-lg rounded-3xl p-8 hover:scale-105 transition-transform duration-500 shadow-lg">
          <h3 class="text-2xl font-bold text-[#EB433D] mb-4">Sustainable</h3>
          <p class="text-[#992A2A] leading-relaxed">
            Ensuring business growth sustainability demands strategic planning, adaptive innovation, responsible
            resource management, and fostering a culture of resilience. It requires aligning short-term gains with
            long-term objectives to thrive amidst evolving market dynamics.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  gsap.registerPlugin(ScrollTrigger);

  window.addEventListener("load", () => {
    const items = document.querySelectorAll("#whychoose .whychoose-item");
    items.forEach(item => {
      gsap.from(item, {
        opacity: 0,
        y: 50,
        scale: 0.97,
        duration: 1.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: item,
          start: "top 85%",
          toggleActions: "play none none reverse"
        }
      });
    });
  });
</script>

<style>
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
