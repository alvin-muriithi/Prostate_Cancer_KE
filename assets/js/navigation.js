document.addEventListener("DOMContentLoaded", () => {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const nav = document.querySelector("nav");

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  }

  window.addEventListener("scroll", () => {
    if (nav) {
      nav.classList.toggle("py-2", window.scrollY > 50);
      nav.classList.toggle("shadow-md", window.scrollY > 50);
    }
  });
});

