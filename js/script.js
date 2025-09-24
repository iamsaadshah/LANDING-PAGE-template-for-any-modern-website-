// <!-- ========== Start AOS Animation ========== -->
$(window).on("load", function () {
  AOS.init({
    duration: 1000, // Animation duration in milliseconds
    offset: 200, // Offset (in pixels) from the top of the element when the animation triggers
    // easing: 'ease-in-out',
    once: true,
  });
});
// <!-- ========== End AOS Animation ========== -->

// <!-- ========== Start glightbox ========== -->
const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  width: "90vw",
  height: "90vh",
});
// <!-- ========== End glightbox ========== -->

// <!-- ========== Start counter ========== -->
function startCounter(target, endValue, duration, suffix = "") {
  let startValue = 0;
  let increment = endValue / duration;
  let current = startValue;
  const counterElement = document.getElementById(target);

  function updateCounter() {
    current += increment;
    if (current >= endValue) {
      current = endValue;
      counterElement.textContent = Math.ceil(current).toLocaleString() + suffix;
      return;
    }
    counterElement.textContent = Math.ceil(current).toLocaleString();
    requestAnimationFrame(updateCounter);
  }

  updateCounter();
}

function handleIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      startCounter("counter1", 20, 500, "+");
      startCounter("counter2", 100, 500, "+");
      startCounter("counter3", 80, 500, "+");
      startCounter("counter4", 250, 500, "+");
      observer.disconnect(); // Stops observing after the counter starts
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5, // Adjust this value as needed
  });

  observer.observe(document.querySelector("#stats")); // Observing the section
});

// <!-- ========== End counter ========== -->

// <!-- ========== Start Form submit button ========== -->

document.getElementById("form1").addEventListener("submit", function (event) {
  var submitButton = document.getElementById("submitbtn1");
  submitButton.disabled = true; // Disable the submit button
  submitButton.innerHTML = "Submitting..."; // Change the text of the button
  submitButton.style.color = "#fff"; // Change the text color to white
});
// <!-- ========== End Form submit button ========== -->

// <!-- ========== Start Industrial ========== -->
$(document).ready(function () {
  $(".industrial").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 3000,
    responsive: {
      0: { items: 1, dots: false },
      600: { items: 3, dots: false },
      1000: { items: 4, dots: false },
    },
  });
});
// <!-- ========== End Industrial ========== -->

// <!-- ========== Start client logo ========== -->
$(document).ready(function () {
  $(".client").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    slideTransition: "linear",
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    autoplayHoverPause: false,
    dots: false,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
      1000: { items: 5 },
    },
  });
});

// <!-- ========== End client logo ========== -->

// <!-- ========== Start our-project ========== -->
$(document).ready(function () {
  $(".our-project").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 3000,
    responsive: {
      0: { items: 1, dots: true },
      600: { items: 2, dots: true },
      1000: { items: 3, dots: true },
    },
  });
});
// <!-- ========== End our-project ========== -->

// <!-- ========== Start Service ========== -->
$(document).ready(function () {
  $(".service").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 3000,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 3 },
    },
  });
});

// <!-- ========== End Services ========== -->

// Mouse Pointer
var cursor = document.querySelector(".cursor");
var cursor2 = document.querySelector(".cursor2");
document.addEventListener("mousemove", function (e) {
  cursor.style.cssText = cursor2.style.cssText =
    "left: " + e.clientX + "px; top: " + e.clientY + "px;";
});
// Mouse Pointer

function toggleAccordion(element) {
  const content = element.querySelector(".accordion-content");
  const plusIcon = element.querySelector("span.text-2xl");

  // Close all others
  document.querySelectorAll(".accordion-content").forEach((el) => {
    if (el !== content) {
      el.style.maxHeight = null;
      el.parentElement.querySelector("span.text-2xl").textContent = "+";
      el.parentElement
        .querySelector("span.text-2xl")
        .classList.remove("rotate-45", "text-primary");
    }
  });

  // Toggle this one
  if (content.style.maxHeight) {
    content.style.maxHeight = null;
    plusIcon.textContent = "+";
    plusIcon.classList.remove("rotate-45", "text-primary");
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
    plusIcon.textContent = "+";
    plusIcon.classList.add("rotate-45", "text-primary");
  }
}

// Collapse functionality for cards
function toggleCollapse(card) {
  const allContents = document.querySelectorAll(".collapse-content");
  const allArrows = document.querySelectorAll(".arrow-icon");

  const content = card.querySelector(".collapse-content");
  const arrow = card.querySelector(".arrow-icon");

  const isOpen = content.classList.contains("open");

  // Close all
  allContents.forEach((el) => {
    el.style.maxHeight = null;
    el.classList.remove("open");
  });

  allArrows.forEach((img) => img.classList.remove("rotate"));

  // Open clicked if not already
  if (!isOpen) {
    content.classList.add("open");
    content.style.maxHeight = content.scrollHeight + "px";
    arrow.classList.add("rotate");
  }
}

// <!-- ========== Start typerwriter ========== -->
function runTypewriterEffect() {
    // For simple single-line typewriter
    const singleLineElements = document.querySelectorAll(".typewriter-on-scroll");

    const singleLineObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const fullText = el.getAttribute("data-typewriter") || "";
                const speed = parseInt(el.getAttribute("data-speed")) || 100;
                let i = 0;

                const type = () => {
                    if (i <= fullText.length) {
                        el.textContent = fullText.substring(0, i);
                        i++;
                        setTimeout(type, speed);
                    }
                };

                type();
                observer.unobserve(el); // only once
            }
        });
    }, { threshold: 0.5 });

    singleLineElements.forEach(el => singleLineObserver.observe(el));

    // For dual-part (colored) typewriter
    const combinedElements = document.querySelectorAll(".typewriter-combined");

    const combinedObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const part1 = el.getAttribute("data-part1") || "";
                const part2 = el.getAttribute("data-part2") || "";
                const speed = parseInt(el.getAttribute("data-speed")) || 100;

                const fullText = part1 + part2;
                let i = 0;

                const type = () => {
                    if (i <= fullText.length) {
                        const typed = fullText.substring(0, i);
                        const p1 = typed.substring(0, part1.length);
                        const p2 = typed.substring(part1.length);
                        el.innerHTML = `${p1}<span class="text-primary">${p2}</span>`;
                        i++;
                        setTimeout(type, speed);
                    }
                };

                type();
                observer.unobserve(el); // only once
            }
        });
    }, { threshold: 0.5 });

    combinedElements.forEach(el => combinedObserver.observe(el));
}
// <!-- ========== End typerwriter ========== -->
