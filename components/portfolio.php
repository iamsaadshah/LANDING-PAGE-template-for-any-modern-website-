<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #FFF5F5;
        /* light theme */
        overflow-x: hidden;
    }

    .scroll-container {
        height: 600vh;
        /* adjust based on number of cards */
    }

    .pin-container {
        height: 100vh;
        width: 100vw;
        overflow: hidden;
    }

    .card {
        will-change: transform;
        transition: box-shadow 0.3s ease;
        background-color: #fff;
        /* card white background */
    }

    .card-text {
        color: #322B2B;
        /* dark text for readability */
    }

    .card-accent {
        background-color: #EB433D;
        /* primary color accent */
    }
</style>

<!-- Scroll Cards -->
<section class="relative overflow-hidden ">
    <div class="scroll-container relative">
        <div class="pin-container absolute top-0 left-0">
            <div class="card-stack absolute inset-0 flex items-center justify-center ">

                <!-- Card 1 -->
                <div
                    class="card absolute  md:w-[90%] lg:w-[85%] xl:w-[75%] h-[80vh] md:h-[65vh] rounded-2xl shadow-xl  flex flex-col md:flex-row overflow-hidden">
                    <!-- Text -->
                    <div class="w-full md:w-1/2 p-5 flex flex-col justify-center card-text">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">CMS Solutions</h2>
                        <p class="mb-6 text-gray-700">Powerful content systems, easy to manage.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>- User-friendly dashboards</li>
                            <li>- Custom & scalable</li>
                            <li>- Workflow automation</li>
                        </ul>
                    </div>
                    <!-- Image -->
                    <div class="w-full md:w-1/2 flex  h-full">
                        <img src="assets/Content-Management-Systems-1024x618.webp" class=" shadow- max-h-[100%]" alt="">
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="card absolute  md:w-[90%] lg:w-[85%] xl:w-[75%] h-[80vh] md:h-[65vh] rounded-2xl shadow-xl  flex flex-col md:flex-row overflow-hidden">
                    <div class="w-full md:w-1/2 p-5 flex flex-col justify-center card-text">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">E-commerce Solutions</h2>
                        <p class="mb-6 text-gray-700">Seamless online stores with scalable architecture.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>- Easy product management</li>
                            <li>- Secure checkout</li>
                            <li>- Marketing tools integration</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 flex  p-5">
                        <img src="assets/E-commerce-Solutions-1024x618.webp" class="rounded-xl shadow-lg max-h-[100%]"
                            alt="">
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="card absolute  md:w-[90%] lg:w-[85%] xl:w-[75%] h-[80vh] md:h-[65vh] rounded-2xl shadow-xl  flex flex-col md:flex-row overflow-hidden">
                    <div class="w-full md:w-1/2 p-5 flex flex-col justify-center card-text">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Maintenance & Support</h2>
                        <p class="mb-6 text-gray-700">Reliable technical support to keep your site running.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>- Bug fixes & updates</li>
                            <li>- Performance optimization</li>
                            <li>- 24/7 support</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 flex">
                        <img src="assets/Maintenance-and-Support-1024x618.webp" class=" shadow-lg max-h-[100%]" alt="">
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="card absolute  md:w-[90%] lg:w-[85%] xl:w-[75%] h-[80vh] md:h-[65vh] rounded-2xl shadow-xl  flex flex-col md:flex-row overflow-hidden">
                    <div class="w-full md:w-1/2 p-5 flex flex-col justify-center card-text">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Responsive Web Design</h2>
                        <p class="mb-6 text-gray-700">Beautiful websites optimized for every device.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>- Mobile-first design</li>
                            <li>- Fast loading pages</li>
                            <li>- SEO friendly</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 flex">
                        <img src="assets/Responsive-Web-Design-1024x618.webp" class=" shadow-lg max-h-[100%]" alt="">
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="card absolute  md:w-[90%] lg:w-[85%] xl:w-[75%] h-[80vh] md:h-[65vh] rounded-2xl shadow-xl  flex flex-col md:flex-row overflow-hidden">
                    <div class="w-full md:w-1/2 p-5 flex flex-col justify-center card-text">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Search Engine Marketing</h2>
                        <p class="mb-6 text-gray-700">Boost traffic and leads through targeted campaigns.</p>
                        <ul class="space-y-2 text-gray-600">
                            <li>- Paid search campaigns</li>
                            <li>- Conversion tracking</li>
                            <li>- Analytics insights</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/2 flex">
                        <img src="assets/search-engine-marketing-collage.webp"
                            class=" shadow-lg max-h-[100%] min-w-[100%]" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Scroll Cards -->

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        gsap.registerPlugin(ScrollTrigger);

        const cards = gsap.utils.toArray(".card");
        if (!cards.length) return;

        cards.forEach((card, i) => gsap.set(card, { zIndex: i + 1 }));
        gsap.set(cards.slice(1), { yPercent: 150 }); // start further down for spacing

        const timeline = gsap.timeline({
            scrollTrigger: {
                trigger: ".scroll-container",
                pin: ".pin-container",
                markers: false,
                scrub: 1,
                start: "top top",
                end: () => "+=" + cards.length * window.innerHeight,
            }
        });

        // bring cards up with spacing
        cards.slice(1).forEach((card) => {
            timeline.to(card, {
                yPercent: 0,
                ease: "none"
            });
        });
    });
</script>