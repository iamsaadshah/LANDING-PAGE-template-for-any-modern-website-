<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Template — Landing</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Bebas+Neue&family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans+Narrow:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rowdies:wght@300;400;700&display=swap');

        :root {
            --primary: #EB433D;
        }

        body {
            background-color: #F9FAFB !important;
            font-family: 'Barlow';
        }


        .no-scroll {
            overflow: hidden;
            height: 100vh;
        }

        /* Loader/banner section */
        body.initial-white {
            background: white;
        }

        .loader {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: #fff;
            color: #fff;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            /* small box starts at bottom */
            z-index: 10;
        }

        #loader-box>* {
            opacity: 0;
        }


        /* The animated box that grows */
        .box {
            width: 400px;
            height: 100px;
            border-radius: 12px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 22px;
            box-sizing: border-box;
            position: relative;
            background: #000;
        }

        .nav {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 28px;
            z-index: 10;
        }

        .part2 {
            display: flex;
            gap: 12px;
        }

        .nav-item {
            padding: 8px 14px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: #f7f7f7;
            color: black;
            border: 1px solid rgba(0, 0, 0, 0.08);
        }

        .nav-item::after {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: #000;
            left: 0;
            bottom: -100%;
            border-radius: 50%;
            transition: all 0.35s ease;
        }

        .nav-item:hover::after {
            bottom: 0;
            border-radius: 0;
        }

        .nav-item a {
            color: inherit;
            text-decoration: none;
            z-index: 2;
            position: relative;
        }

        .nav-item:hover a {
            color: #fff;
        }

        .left-1 {
            flex: 1;
            padding-right: 18px;
            color: var(--primary);
        }

        .main-title {
            font-family: 'Rowdies', cursive;
            font-weight: 700;
            font-size: 48px;
            margin: 0 0 8px 0;
            text-transform: uppercase;
        }

        .main-title b {
            display: inline-block;
            margin-right: 6px;
        }

        .sub-heading {
            font-size: 17px;
            font-weight: 400;
            color: #e6e6e6;
            margin: 0;
        }

        .right-1 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-1 img {
            max-width: 420px;
            width: 100%;
            height: auto;
            display: block;
        }

        #site-root {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        #site-root.visible {
            opacity: 1;
        }


        @media (max-width: 768px) {
            .box {
                flex-direction: column;
                min-height: 600px;
                padding: 0 18px;
                padding-top: 20px;
                /* space for nav/logo */
                position: relative;
            }

            .nav {
                position: relative;
                /* let it take space */
                flex-direction: column;
                align-items: center;
                /* center logo */
                gap: 10px;
                padding: 10px 0;
            }

            .nav img {
                width: 200px;
                /* smaller logo for mobile */
                max-width: 60vw;
                height: auto;
            }

            .part2 {
                display: none;
                /* hide nav items on mobile */
            }

            .left-1,
            .right-1 {
                width: 100%;
                text-align: center;
                padding: 10px 0;
            }

            .left-1 {
                margin-top: 100px;
                max-width: 600px;
                margin: auto;
            }

            .right-1 {
                margin-top: 20px;
            }

            .main-title {
                font-size: 22px;
            }

            .sub-heading {
                font-size: 14px;
            }

            .right-1 img {
                width: 220px;
            }

            .nav-item {
                display: none;
            }
        }
    </style>
    <!-- Animation -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }
    </style>
</head>


<body x-data="{ showModal: false }">

    <!-- Modal Start -->
    <div x-show="showModal"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm p-4 overflow-auto"
        style="display: none">

        <div
            class="w-full max-w-4xl bg-white rounded-2xl overflow-hidden shadow-2xl flex flex-col md:flex-row animate-fadeIn">

            <!-- Left Side (Image + Headline) -->
            <div class="relative w-full md:w-1/2 bg-cover bg-center flex items-center justify-center text-white p-6"
                style="background-image: url('assets/marketing.jpg'); min-height: 340px;">
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>
                <div class="relative z-10 text-center">
                    <h2 class="text-2xl md:text-3xl font-bold mb-3 leading-snug">
                        Unlock Special Offers & <br> Best Deals!
                    </h2>
                    <p class="text-base md:text-lg opacity-90">Dream Interiors, Unbeatable Prices!</p>
                </div>
            </div>

            <!-- Right Side (Form) -->
            <div class="w-full md:w-1/2 bg-gradient-to-br from-red-600 to-red-700 text-white p-6 md:p-8">
                <div class="flex justify-end">
                    <button @click="showModal = false"
                        class="text-white hover:text-gray-200 transition transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form action="send_mail.php" method="POST" class="mt-2 space-y-5 text-sm" id="newForm">

                    <!-- Name -->
                    <div>
                        <label class="block font-medium mb-1">Name <span class="text-red-200">*</span></label>
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full rounded-lg bg-white/90 text-black px-4 py-2 focus:ring-2 focus:ring-red-400 outline-none text-sm shadow-sm">
                    </div>

                    <!-- Email + Phone -->
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                        <div class="w-full">
                            <label class="block font-medium mb-1">Email</label>
                            <input type="email" name="email" placeholder="Your Email"
                                class="w-full rounded-lg bg-white/90 text-black px-4 py-2 focus:ring-2 focus:ring-red-400 outline-none text-sm shadow-sm">
                        </div>
                        <div class="w-full mt-4 sm:mt-0">
                            <label class="block font-medium mb-1">Phone <span class="text-red-200">*</span></label>
                            <input type="tel" name="phone" pattern="[0-9]{10,}" required
                                class="w-full rounded-lg bg-white/90 text-black px-4 py-2 focus:ring-2 focus:ring-red-400 outline-none text-sm shadow-sm">
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block font-medium mb-1">Message</label>
                        <textarea name="message" placeholder="Message..." rows="3"
                            class="w-full rounded-lg bg-white/90 text-black px-4 py-2 focus:ring-2 focus:ring-red-400 outline-none text-sm shadow-sm"></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-white text-red-600 font-semibold rounded-full px-6 py-3 shadow-md hover:bg-red-600 hover:text-white transition duration-300 transform hover:scale-105">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->




    <!-- Loader -->
    <!-- Loader/banner section -->
    <div class="loader overflow-hidden" id="site-loader">
        <div class="box " id="loader-box">
            <div class="nav">
                <img src="assets/BM_Logo.png" width="220" alt="Yours logo" style="max-width:40vw; height:auto">
                <div class="part2">
                    <div class="nav-item"><a href="#page3">Services</a></div>
                    <div class="nav-item"><a href="#about">About Us</a></div>
                    <div class="nav-item text-red-500"><a href="#contact">Contact</a></div>
                </div>
            </div>

            <div class="left-1">
                <h1 class="main-title mt-8">
                    <b>Your</b> <b>Brand</b> <b>Tagline</b> ex.<b>we</b> <b>built</b> <b>Experiences</b>
                </h1>
                <p class="sub-heading text-xl">AI-powered, custom websites designed to convert visitors into customers.
                </p>
                <button
                    class="relative overflow-hidden rounded-full px-5 py-2.5 mt-5 uppercase  bg-white text-[18px] font-medium text-zinc-900 cursor-pointer transition-all duration-300 ease-in-out group">
                    <!-- Hover Background -->
                    <span
                        class="absolute left-0 bottom-[-100%] w-full h-full bg-[#EB433D] rounded-full transition-all duration-300 ease-in-out group-hover:bottom-0 group-hover:rounded-none"></span>

                    <!-- Button Text -->
                    <span
                        class="relative z-10 transition-colors text-[16px] duration-300 ease-in-out group-hover:text-white"
                        @click="showModal = true">contact
                        us</span>
                </button>


            </div>

            <div class="right-1">
                <img src="assets/Web Development.gif" alt="animated growth" />
            </div>
        </div>
    </div>


    <!-- Sections with blob background -->
    <div class="relative">
        <!-- Blob Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-orange-50 to-blue-100 -z-10"></div>
        <div class="absolute inset-0 overflow-hidden -z-10">
            <div
                class="absolute top-16 sm:top-24 left-6 sm:left-12 w-56 h-56 sm:w-80 sm:h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 sm:opacity-40 sm:animate-blob">
            </div>
            <div
                class="absolute top-24 sm:top-40 right-6 sm:right-12 w-56 h-56 sm:w-80 sm:h-80 bg-orange-200 rounded-full mix-blend-multiply filter blur-xl opacity-25 sm:opacity-35 sm:animate-blob sm:animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 sm:-bottom-12 left-12 sm:left-24 w-56 h-56 sm:w-80 sm:h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 sm:opacity-30 sm:animate-blob sm:animation-delay-4000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 sm:w-48 sm:h-48 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 sm:opacity-25 sm:animate-blob sm:animation-delay-1000">
            </div>
        </div>

        <!-- Your sections -->
        <?php include 'components/sop.php'; ?>
        <?php include 'components/portfolio.php'; ?>
        <?php include 'components/about.php'; ?>
        <?php include 'components/cta.php'; ?>
        <?php include 'components/potential.php'; ?>
        <?php include 'components/whychoose.php'; ?>
        <?php include 'components/faq.php'; ?>
        <?php include 'components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"
        integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const box = document.getElementById('loader-box');
        const siteRoot = document.getElementById('site-root');
        const body = document.body;

        // Set initial state instantly
        gsap.set(box, { width: 400, height: 100 });

        // Run as soon as DOM is ready (don’t wait for images/GIFs)
        document.addEventListener('DOMContentLoaded', () => {
            const tl = gsap.timeline({ defaults: { ease: 'power2.inOut' } });

            // Expand box
            tl.to(box, {
                width: '100vw',
                height: '100vh',
                duration: 0.7,
                borderRadius: 0,
                onStart: () => { body.classList.remove('initial-white'); }
            });

            // Animate content AFTER box expansion
            tl.to('#loader-box > *', { opacity: 1, duration: 0.2, stagger: 0.1 }, '-=0.2');

            // Animate nav/logo
            tl.from('.nav img', { y: -30, opacity: 0, duration: 0.7 }, '-=0.9');
            tl.from('.nav-item', { y: -20, opacity: 0, duration: 0.6, stagger: 0.18 }, '-=0.8');

            // Animate title letters
            tl.from('.main-title b', {
                y: -80,
                opacity: 0,
                rotation: -6,
                scale: 0.92,
                duration: 0.8,
                stagger: 0.07,
                ease: 'bounce.out'
            }, '-=0.7');

            // Animate sub-heading and right image
            tl.from('.sub-heading', { y: 30, opacity: 0, duration: 0.6 }, '-=0.5');
            tl.from('.right-1 img', { x: 120, opacity: 0, duration: 0.9 }, '-=0.6');

            // Reveal site content
            tl.add(() => {
                siteRoot.classList.add('visible');
                body.classList.remove('no-scroll');
            });
        });
    </script>

</body>

</html>