<!-- Remix icons (keep) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- SECTION: Services -->
<section class="services-section py-10">
  <div class="elem-container">
    <!-- Row 1 -->
    <div class="elem line1 left">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>1. Search Engine Optimization</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/seo.png" alt="SEO" />
        </div>
      </div>
    </div>


    <div class="elem line2 right">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>2. Web Development</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/web-dev.png" alt="Web Dev" />
        </div>
      </div>
    </div>


    <div class="elem line1 right">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>3. Social Media Marketing</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/smm.png" alt="SMM" />
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="elem line2 left">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>4. Content Marketing</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/content-marketing.png" alt="Content" />
        </div>
      </div>
    </div>

    <div class="elem line1 center">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>5. Search Engine Marketing</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/sem.png" alt="SEM" />
        </div>
      </div>
    </div>


    <div class="elem line2 center">
      <div class="elem-inner">
        <div class="elem-part1">
          <h2>6. Email Marketing</h2>
          <h4><i class="ri-arrow-right-up-line"></i> Learn More</h4>
        </div>
        <div class="elem-part2">
          <img src="assets/services/email-marketing.png" alt="Email" />
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Styles -->
<style>
  *,
  :before,
  :after {
    box-sizing: border-box;
  }

  html,
  body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial;
  }

  /* .services-section {
    padding: 64px 20px;
  } */

  .elem-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    justify-content: space-between;
    align-items: stretch;
  }

  .elem {
    margin-bottom: 25px;
    flex: 0 1 calc(32% - 16px);
    min-width: 280px;
    background: linear-gradient(135deg, #fff5f5, #ffe3e3);
    border: 2px solid rgba(235, 67, 61, 0.2);
    box-shadow: 0 26px 0 rgba(235, 67, 61, 0.08);
    overflow: hidden;
    border-radius: 24px;
    position: relative;
    transition: transform 0.25s ease;
  }

  .elem-inner {
    display: flex;
    gap: 16px;
    align-items: center;
    padding: 18px;
    transform: translateX(0);
    will-change: transform, opacity;
    border-radius: 24px;
  }

  .elem-part1 {
    flex: 1 1 60%;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .elem-part2 {
    flex: 0 0 40%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .elem-part2 img {
    width: 100%;
    height: auto;
    max-height: 80px;
    display: block;
    border-radius: 16px;
    object-fit: contain;
  }

  .elem-part1 h2 {
    margin: 0;
    padding: 8px 12px;
    background: linear-gradient(90deg, #ff7eb9, #ff758c);
    color: #fff;
    border-radius: 16px;
    font-size: 1.25rem;
    font-weight: 600;
  }

  .elem-part1 h4 {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
    color: #111827;
    font-weight: 500;
  }

  .elem-part1 h4 i {
    width: 36px;
    height: 36px;
    display: inline-grid;
    place-items: center;
    background: #eb433d;
    color: #fff;
    border-radius: 50%;
    transition: transform .3s ease;
  }

  .elem-part1 h4 i:hover {
    transform: rotate(405deg) scale(1.06);
  }

  .elem:hover {
    transform: translateY(-6px);
  }

  @media(max-width:1024px) {
    .elem {
      flex: 0 1 calc(48% - 12px);
    }

    .elem-part2 img {
      max-height: 140px;
    }
  }

  @media(max-width:768px) {
    .elem-container {
      gap: 16px;
      padding: 40px 12px;
    }

    .elem {
      flex: 1 1 100%;
      width: 100%;
      min-width: 0;
      border-radius: 20px;
    }

    .elem-inner {
      flex-direction: row;
      padding: 14px;
    }

    .elem-part2 {
      flex: 0 0 40%;
      padding-left: 8px;
    }

    .elem-part1 h2 {
      font-size: 1rem;
    }
  }
</style>

<!-- GSAP + ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
<script>
  (function () {
    gsap.registerPlugin(ScrollTrigger);
    gsap.utils.toArray('.elem').forEach(el => {
      const inner = el.querySelector('.elem-inner');
      gsap.set(inner, { opacity: 0, y: 50, scale: 0.98 });
      gsap.to(inner, {
        y: 0, opacity: 1, scale: 1, duration: 0.7, ease: 'power3.out',
        scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none reverse' }
      });
    });
  })();
</script>