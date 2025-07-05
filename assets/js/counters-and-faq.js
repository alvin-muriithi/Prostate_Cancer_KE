document.addEventListener("DOMContentLoaded", function () {
  // Counter animation
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

  window.addEventListener("scroll", () => {
    const statsSection = document.querySelector(".stats-section");
    if (statsSection && statsSection.getBoundingClientRect().top < window.innerHeight * 0.85) {
      startCounters();
    }
  });

  // FAQ toggles
  const faqToggles = document.querySelectorAll(".faq-toggle");
  faqToggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      const targetId = this.getAttribute("data-target");
      const targetContent = document.getElementById(targetId);
      const icon = this.querySelector("i");

      if (targetContent.classList.contains("hidden")) {
        // Close all other FAQs
        document.querySelectorAll(".faq-toggle").forEach((otherToggle) => {
          if (otherToggle !== toggle) {
            const otherId = otherToggle.getAttribute("data-target");
            const otherContent = document.getElementById(otherId);
            const otherIcon = otherToggle.querySelector("i");
            otherContent.classList.add("hidden");
            otherIcon?.classList.remove("ri-arrow-up-s-line");
            otherIcon?.classList.add("ri-arrow-down-s-line");
          }
        });

        targetContent.classList.remove("hidden");
        icon?.classList.remove("ri-arrow-down-s-line");
        icon?.classList.add("ri-arrow-up-s-line");
      } else {
        targetContent.classList.add("hidden");
        icon?.classList.remove("ri-arrow-up-s-line");
        icon?.classList.add("ri-arrow-down-s-line");
      }
    });
  });
});