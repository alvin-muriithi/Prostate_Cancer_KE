document.addEventListener("DOMContentLoaded", function () {
  const scrollRevealElements = document.querySelectorAll(".scroll-reveal");
  const backToTopButton = document.getElementById("back-to-top");

  const counterElements = document.querySelectorAll(".counter");
  let countersStarted = false;

  function startCounters() {
    if (countersStarted) return;
    counterElements.forEach(counter => {
      const target = parseInt(counter.getAttribute("data-target"));
      const duration = 2000;
      const step = target / (duration / 16);
      let current = 0;
      const updateCounter = () => {
        current += step;
        if (current < target) {
          counter.textContent = Math.floor(current);
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };
      updateCounter();
    });
    countersStarted = true;
  }

  function checkScrollReveal() {
    scrollRevealElements.forEach(element => {
      const elementTop = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      if (elementTop < windowHeight * 0.85) {
        element.classList.add("revealed");
        if (element.querySelector(".counter")) startCounters();
      }
    });

    if (window.scrollY > 500) {
      backToTopButton?.classList.remove("opacity-0", "invisible");
      backToTopButton?.classList.add("opacity-100", "visible");
    } else {
      backToTopButton?.classList.add("opacity-0", "invisible");
      backToTopButton?.classList.remove("opacity-100", "visible");
    }
  }

  checkScrollReveal();
  window.addEventListener("scroll", checkScrollReveal);

  backToTopButton?.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});