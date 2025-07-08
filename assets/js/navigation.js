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

const welcome = document.getElementById("welcomeText");
welcome.textContent = `Welcome, ${data?.name.split(" ")[0]}!`;
welcome.classList.remove("hidden");
// Ensure the welcome text is visible only when user data is available
if (data?.name) {
  welcome.classList.remove("hidden");
}
else {
  welcome.classList.add("hidden");
}   