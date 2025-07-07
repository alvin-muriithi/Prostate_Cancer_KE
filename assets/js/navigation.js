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

const user = JSON.parse(localStorage.getItem("user"));
if (user && user.role === "user") {
  document.getElementById("userArea").innerText = `Welcome, ${user.full_name}`;
}
else if (user && user.role === "admin") {
  document.getElementById("userArea").innerText = "Welcome Admin";
} else {
  document.getElementById("userArea").innerText = "";
}