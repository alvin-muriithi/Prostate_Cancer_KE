document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("newsletterForm");
  const toast = document.getElementById("toastSuccess");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(form);

      fetch("newsletter.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.text())
        .then(data => {
          if (data === "success") {
            toast.classList.remove("hidden");
            form.reset();
          } else {
            alert("Something went wrong. Please try again.");
          }
        })
        .catch(error => {
          console.error("Error:", error);
          alert("Failed to submit.");
        });
    });
  }
});